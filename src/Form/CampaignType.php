<?php

namespace App\Form;

use App\Entity\Campaign;
use App\Entity\Participant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                // 'label' => 'test',
                // 'attr' => [
                //     'class' => 'mettre tes classes css ici'
                // ]
            ])
            ->add('content', TextType::class, [
                // 'placeholder' => 'Décrivez à vos amis pourquoi vous faites une campagne',
                'attr' => [
                    'class' => 'materialize-textarea'
                         ]
            ])
            // ->add('createdAt')
            // ->add('updateAt')
            ->add('goal')
            ->add('name', TextType::class, [
                'attr' => [
                'class' => 'validate'
                     ]
            ])
            ->add('participants', EntityType::class, [
                'class' => Participant::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-large waves-effect waves-light pink lighten-1 col s12'
                    
                       ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
