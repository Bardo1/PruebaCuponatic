function config($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise("/index/main");
    $stateProvider
        .state('index', {
            abstract: true,
            url: "/index",
            templateUrl: "views/common/content.html",
        })
        .state('index.main', {
            url: "/main",
            templateUrl: "views/main.html",
            data: { pageTitle: 'Example view' }
        })
        .state('index.login', {
            url: "/login",
            controller: "tableChosenCtrl",
            templateUrl: "views/login.html",
            data: { pageTitle: 'Example view' }
        })
        .state('index.minor', {
            url: "/minor",
            controller: "productoCtrl",
            templateUrl: "views/minor.html",
            data: { pageTitle: 'Example view' }
        })
        .state('index.minor2', {
            url: "/minor2",
            controller: "productoCtrl",
            templateUrl: "views/minor2.html",
            data: { pageTitle: 'Example view' }
        });
}

var app = angular
    .module('inspinia',[
        'ui.bootstrap',
        'textAngular',
        'ui.bootstrap.modal',
        'ui.router',
        'datatables',
        'datatables.buttons',
        'blockUI',
        'ngResource',
        'oitozero.ngSweetAlert',
        'oc.lazyLoad',
        'platanus.rut',
        'ngIdle',
        'pascalprecht.translate',
        'datePicker',
        'daterangepicker',
        'localytics.directives'])
    .config(config);
