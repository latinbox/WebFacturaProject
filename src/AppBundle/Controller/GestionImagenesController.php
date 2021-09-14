<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\FotoType;
use AppBundle\Form\FotoAdminType;
use AppBundle\Form\FotoMasiveType;
use AppBundle\Entity\Imagen;

use AppBundle\Entity\ExcelFile;
use AppBundle\Form\Type\ExcelFormatType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Reader\Ods as ReaderOds;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Ods;
use Symfony\Component\HttpFoundation\StreamedResponse;



 /**
     * @Route("/gestionImagenes")
     */
class GestionImagenesController extends Controller
{
    const FILENAME = 'productos_prueba';
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
       //$form = $this->createForm(FotoType::class, $imagenNueva); 
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
            $imagenNueva->setTop(0);
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
     * @Route("/nuevaImagenAdmin/{id}", name="nuevaImagenAdmin")
     */
    // Sirve para editar elemento
    public function nuevaImagenAdminAction(Request $request, $id=null)
    {   
        if($id){
            $repository = $this->getDoctrine()->getRepository(Imagen::class);
            $imagenNueva = $repository->find($id);
         
        } else { 
            $imagenNueva = new Imagen();
        }
      
        // hacemos constructor de form
       //$form = $this->createForm(FotoType::class, $imagenNueva); 
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
    public function importAction(Request $request)
    {   
        
        $filename = $this->get('kernel')->getRootDir().'/../export/'.self::FILENAME.'.csv';
        if (!file_exists($filename)) {
            throw new \Exception('File does not exist');
        }

        $spreadsheet = $this->readFile($filename);
        $data = $this->createDataFromSpreadsheet($spreadsheet);

        return $this->render('gestionImagenes/cargaMasiva.html.twig', [
            'data' => $data,
        ]);
    }

    protected function loadFile($filename)
    {
        return IOFactory::load($filename);
    }

    protected function readFile($filename)
    {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        switch ($extension) {
            case 'ods':
                $reader = new ReaderOds();
                break;
            case 'xlsx':
                $reader = new ReaderXlsx();
                break;
            case 'csv':
                $reader = new ReaderCsv();
                break;
            default:
                throw new \Exception('Invalid extension');
        }
        $reader->setReadDataOnly(true);
        return $reader->load($filename);
    }

    protected function createDataFromSpreadsheet($spreadsheet)
    {
        $data = [];
        foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
            $worksheetTitle = $worksheet->getTitle();
            $data[$worksheetTitle] = [
                'columnNames' => [],
                'columnValues' => [],
            ];
            foreach ($worksheet->getRowIterator() as $row) {
                $rowIndex = $row->getRowIndex();
                if ($rowIndex > 2) {
                    $data[$worksheetTitle]['columnValues'][$rowIndex] = [];
                }
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
                foreach ($cellIterator as $cell) {
                    if ($rowIndex === 2) {
                        $data[$worksheetTitle]['columnNames'][] = $cell->getCalculatedValue();
                    }
                    if ($rowIndex > 2) {
                        $data[$worksheetTitle]['columnValues'][$rowIndex][] = $cell->getCalculatedValue();
                    }
                }
            }
        }

        return $data;
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
