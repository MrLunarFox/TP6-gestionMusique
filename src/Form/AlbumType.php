<?php

namespace App\Form;

use App\Entity\Album;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label'=>"Nom de l'album",
                'attr'=>[
                    "placeholder"=>"Saisir le nom de l'album"
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr'=>[
                    "placeholder"=>"Saisir la description de l'album"
                ]
            ])
            ->add('site', UrlType::class, [
                'attr'=>[
                    "placeholder"=>"Saisir le lien du site web de l'album"
                ]
            ])
            ->add('image', TextType::class, [
                'attr'=>[
                    "placeholder"=>"Saisir le chemin de l'image"
                ]
            ])
            ->add('type', ChoiceType::class, [
                "choices"=>[
                    "Solo"=>0,
                    "Groupe"=>1
                ]
            ])
            //->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
