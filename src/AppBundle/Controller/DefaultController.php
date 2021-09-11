<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Imagen;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {   
        // capturar el repositorio de la tabla Imagen
        $repository = $this->getDoctrine()->getRepository(Imagen::class);
        $imagenes = $repository->findByTop(1);
        return $this->render('default/index.html.twig', array('imagenes'=>$imagenes));
    }
       /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/nosotros.html.twig');
    }
    /**
     * @Route("/imagen/{id}", name="imagen")
     */
    public function imagenAction(Request $request,$id=null)
    {
        if($id!=null){ 
            $repository = $this->getDoctrine()->getRepository(Imagen::class);
            $imagen = $repository->find($id);
            return $this->render('default/imagen.html.twig', array("imagen"=>$imagen));
        } else {
            return $this->redirectToRoute('homepage');
        }
        
    }
}
