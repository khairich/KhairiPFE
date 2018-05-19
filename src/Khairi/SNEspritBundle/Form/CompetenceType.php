<?php

namespace Khairi\SNEspritBundle\Form;

use Khairi\SNEspritBundle\Form\Type\TagsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
       // ->add('idUser')
        //->add('expert',TagsType::class);
        ->add('expert');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Khairi\SNEspritBundle\Entity\Competence'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'khairi_snespritbundle_competence';
    }


}
