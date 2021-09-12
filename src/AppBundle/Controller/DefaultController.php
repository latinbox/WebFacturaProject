<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Imagen;
use AppBundle\Form\UsuarioType;
use AppBundle\Entity\Usuario;
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
         /**
     * @Route("/registro", name="registro")
     */
    // Sirve para editar elemento
    public function registroAction(Request $request, $id=null)
    {   
        $usuario = new Usuario();
       
       $form = $this->createForm(new UsuarioType(), $usuario); 
       // Recogemos la info
       $form->handleRequest($request);
       // validaciones
       if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);
            // igualar username a email
            $usuario->setUsername($usuario->getEmail());

            // 3c roles 
            $usuario->setRoles(array('ROLE_USER'));

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('login');
    }
        return $this->render('default/registro.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, $id=null)
    {   
        return $this->render('default/login.html.twig');
}
}