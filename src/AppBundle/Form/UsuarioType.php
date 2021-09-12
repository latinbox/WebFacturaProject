<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', 'email')
        ->add('plainPassword', 'repeated', array(
            'type' => 'password',
            'first_options'  => array('label' => 'Contraseña'),
            'second_options' => array('label' => 'Repetir Contraseña'),
        ))
        ->add('registrar', 'submit')
        ;
    }

    public function getName()
    {
        return 'app_task';
    }
}