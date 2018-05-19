<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class PrivateMessageType extends AbstractType
{

    /**
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['empty_data'];

        $builder
            // create drop down with data from a query
            ->add('receiver', EntityType::class, array(
                'class' => 'BackendBundle\Entity\User',
                'query_builder' => function($repository) use($user) {
                    // Use custom query from a repository created for User entity
                    return $repository->getFollowingUsers($user);
                },
                'choice_label' => function($user) {
                    return $user->getName()." ".$user->getSurname()." - ".$user->getNick();
                },
                'label' => 'TO:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('message', TextareaType::class, array(
                'label' => 'Message',
                'required' => 'required',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('image', FileType::class, array(
                'label' => 'Image',
                'required' => false,
                'data_class' => null,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('file', FileType::class, array(
                'label' => 'File',
                'required' => false,
                'data_class' => null,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('Submit', SubmitType::class, array(
                "attr" => array(
                    "class" => "btn btn-success"
                )
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\PrivateMessage'
        ));
    }

    public function getBlockPrefix()
    {
        return 'backendbundle_private_message';
    }
}
