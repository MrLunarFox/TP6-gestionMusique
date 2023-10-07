<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Style;
use App\Entity\Artiste;
use App\Repository\StyleRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('image', TextType::class, [
                'attr'=>[
                    "placeholder"=>"Saisir le chemin de l'image"
                ]
            ])
            ->add('date', TextType::class, [
                'label'=>"Année de l'album",
                'attr'=>[
                    "placeholder"=>"Saisir l'année de sortie de l'album"
                ]
            ])
            ->add('artiste', EntityType::class, [
                'class' => Artiste::class,
                'label' => "Nom de l'artiste",
            ])
            ->add('styles', EntityType::class, [
                'class' => Style::class,
                // 'query_builder'=>function(StyleRepository $repo) {
                //     return $repo->listeStylesSimple();
                // },
                'choice_label'=>'nom',
                'label' => "Style(s)",
                'required'=>false,
                'multiple' => true, // Permet la sélection de plusieurs styles
                'expanded' => true,
                'by_reference'=>false
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
