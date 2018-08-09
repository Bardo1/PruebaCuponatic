
app.controller('productoCtrl',['DTOptionsBuilder','DTColumnBuilder','$scope','$state','$http','SweetAlert','blockUI','$compile','$modal', function(DTOptionsBuilder, DTColumnBuilder,$scope,$state,$http, SweetAlert, blockUI,$compile,$modal){

        console.log("productoCtrl productoCtrl....");


            $scope.buscarProductos = function(){
                            
                               var data = {
                               valor: $scope.proNombre
                               }; 

                               console.log("esto es el data 1");
                               console.log(data);

                                blockUI.start();
                                $http.post('lista_producto',data)
                                .success(function(data){
                                  blockUI.stop();
                                  if(data){
                                  console.log("esto es el data 3 ");
                                  console.log(data);
                                  $scope.productos = data;

                                 }else{
                                 }
                                })
                                 .error(function(data){
                                  blockUI.stop();
                                  SweetAlert.swal("Cacelado", "el codigo ya se encuentra registrado", "error");
                                });                                
                            }
            

             $scope.buscarProductosVendidos = function(){
                              
                                  blockUI.start();
                                  $http.post('lista_producto_vendidos')
                                  .success(function(data){
                                    blockUI.stop();
                                    if(data){
                                        
                                    $scope.productosV = data;

                                    }else{
                                  //  SweetAlert.swal("Cancelado", "Algo ha ocurrido", "error");
                                    }
                                  })
                                   .error(function(data){
                                    blockUI.stop();
                                    SweetAlert.swal("Cacelado", "el codigo ya se encuentra registrado", "error");
                                  });                                
                            }

}]);





