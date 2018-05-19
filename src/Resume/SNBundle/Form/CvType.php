<?php

namespace Resume\SNBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CvType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstName')
        ->add('lastName')
        ->add('birthday', DateType::class, array(
            'years' => range(date('Y') - 50, date('Y') + 20)))
        ->add('email', EmailType::class, array(
            'label' => 'email',
            'required' => 'required',
            'attr' => array(
                'class' => 'form-email form-control'
            )
        ))
        ->add('telephone')
        ->add('image' ,FileType::class, array(
            'label' => 'image',
            'required' => false,
            'data_class' => null,
            'attr' => array(
                'class' => 'form-image form-control'
            )))
        ->add('education',TextareaType::class, array(
            'label' => 'education',
            'required' => false,
            'attr' => array(
                'class' => 'form-bio form-control'
            )
        ))
        ->add('projects',TextareaType::class, array(
            'label' => 'projects',
            'required' => false,
            'attr' => array(
                'class' => 'form-bio form-control'
            )
        ))
        ->add('internship',TextareaType::class, array(
            'label' => 'internship',
            'required' => false,
            'attr' => array(
                'class' => 'form-bio form-control'
            )
        ))
      ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Resume\SNBundle\Entity\Cv'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'resume_snbundle_cv';
    }


}
