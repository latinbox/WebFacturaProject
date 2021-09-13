<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use AppBundle\Form\FotoType;
use AppBundle\Form\FotoMasiveType;
use AppBundle\Entity\Imagen;



 /**
     * @Route("/gestionImagenes")
     */
class GestionImagenesController extends Controller
{
     /**
     * @Route("/nuevaImagen/{id}", name="nuevaImagen")
     */
    // Sirve para editar elemento
    public function nuevaImagenAction(Request $request, $id=null)
    {   
        if($id){
            $repository = $this->getDoctrine()->getRepository(Imagen::class);
            $imagenNueva = $repository->find($id);
         
        } else { 
            $imagenNueva = new Imagen();
        }
      
        // hacemos constructor de form
       // $form = $this->createForm(FotoType::class, $imagenNueva); 
       $form = $this->createForm(new FotoType(), $imagenNueva); 
       // Recogemos la info
       $form->handleRequest($request);
       // validaciones
       if ($form->isSubmitted() && $form->isValid()) {
             // rellenamos el entity imagen
            $imagenNueva = $form->getData();
            $fotoFile = $imagenNueva->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$fotoFile->guessExtension();

            // moves the file to the directory where brochures are stored
            $fotoFile->move(
                $this->getParameter('img_directory'),
                $fileName
            );
            $imagenNueva->setImage($fileName);
   
            //$imagenNueva->setTop(0);
            $imagenNueva->setFechaCreacion(new \DateTime());
           
            // almacenar nueva imagen
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNueva);
            $em->flush();
            return $this->redirectToRoute('imagen', array('id' => $imagenNueva->getId()));
    }
        return $this->render('gestionImagenes/nuevaImagen.html.twig', array('form'=>$form->createView()));
    }
    /**
     * @Route("/listadoImagen", name="listadoImagen")
     */
    public function listaImagenAction(Request $request)
    {   
        $repository = $this->getDoctrine()->getRepository(Imagen::class);
        $imagenes = $repository->findAll();
        return $this->render('gestionImagenes/listadoImagen.html.twig', array("imagenes"=>$imagenes));
        
    }
     /**
     * @Route("/cargaMasiva", name="cargaMasiva")
     */
    public function cargaMasivaAction(Request $request)
    {   
        if (isset($_POST['submit'])) {
 
            $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
             
            if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
             
                $arr_file = explode('.', $_FILES['file']['name']);
                $extension = end($arr_file);
             
                if('csv' == $extension) {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                }
         
                $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
         
                $sheetData = $spreadsheet->getActiveSheet()->toArray();
                 
                if (!empty($sheetData)) {
                    for ($i=1; $i<count($sheetData); $i++) {
                        $name = $sheetData[$i][0];
                        $email = $sheetData[$i][1];
        $sql = "INSERT INTO USERS(name, email) VALUES('$name', '$email')";
        
       
                    }
                }
            }
        }
        
        $repository = $this->getDoctrine()->getRepository(Imagen::class);
        $imagenNueva = $repository->findAll();

        $imagenNueva = new Imagen();
      
        // hacemos constructor de form
       // $form = $this->createForm(FotoType::class, $imagenNueva); 
       $form = $this->createForm(new FotoType(), $imagenNueva); 
       // Recogemos la info
       $form->handleRequest($request);
       // validaciones
       if ($form->isSubmitted() && $form->isValid()) {
             // rellenamos el entity imagen
            $imagenNueva = $form->getData();
            $fotoFile = $imagenNueva->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$fotoFile->guessExtension();

            // moves the file to the directory where brochures are stored
            $fotoFile->move(
                $this->getParameter('img_directory'),
                $fileName
            );
            $imagenNueva->setImage($fileName);
            //$imagenNueva->setTop(0);
            $imagenNueva->setFechaCreacion(new \DateTime());
           
            // almacenar nueva imagen
            $em = $this->getDoctrine()->getManager();
            $em->persist($imagenNueva);
            $em->flush();
            return $this->redirectToRoute('imagen', array('id' => $imagenNueva->getId()));
    }
        return $this->render('gestionImagenes/cargaMasiva.html.twig', array('form'=>$form->createView()));
    }
 


       /**
     * @Route("/borrar/{id}", name="borrarImagen")
     */
    // Sirve para editar elemento
    public function borrarImagenAction(Request $request, $id=null)
    {   
        if($id){
            $repository = $this->getDoctrine()->getRepository(Imagen::class);
            $imagen = $repository->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($imagen);
            $em->flush();
        }
           
            return $this->redirectToRoute('listadoImagen');
    }
        /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
