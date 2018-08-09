<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AntiMattr\GoogleBundle\Maps\StaticMap;
use AntiMattr\GoogleBundle\Maps\Marker;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    /*$var = array(1, 2, 3);
    ladybug_dump($request);*/
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }



    public function listaProductosAction(Request $request)
    {       
            $valor = $request->request->get('valor');            
            $em          = $this->getDoctrine()->getManager();
            $rRepository = $this->getDoctrine()->getRepository('AppBundle:GenRegion');
            //ladybug_dump("no problem");
            $entities    = $rRepository->listaProductos($valor);
            //echo'<pre>';var_dump($entities);exit;
            return new JsonResponse($entities);        
    }

    public function listaProductosVendidosAction(Request $request)
    {       
            $em          = $this->getDoctrine()->getManager();
            $rRepository = $this->getDoctrine()->getRepository('AppBundle:GenRegion');
            // ladybug_dump("no problem");
            $entities    = $rRepository->listaProductosVendidos();
            //echo'<pre>';var_dump($entities);exit;
            return new JsonResponse($entities);
    }


}
