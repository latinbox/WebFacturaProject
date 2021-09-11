<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('image', 'file', array('attr'=>array('onChange' => 'onChange(event)')))
            ->add('top')
            ->add('save', 'submit')
        ;
    }

    public function getName()
    {
        return 'app_task';
    }
}