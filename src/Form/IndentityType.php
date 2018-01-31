<?php

namespace App\Form;

use App\Entity\Identity;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class IndentityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextType::class, array('label' => 'Description'))
            ->add('backgroundimgFile', FileType::class, array('label' => 'Background', 'attr' => array('class' => 'formFile')))
            ->add('profileimgFile', FileType::class, array('label' => 'Logo', 'attr' => array('class' => 'formFile')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => Indentity::class,
        ]);
    }
}
