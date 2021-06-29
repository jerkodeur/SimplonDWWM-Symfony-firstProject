<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                "label" => "Nom de la catégorie",
                'label_attr' => ['class' => 'mb-1'],
                'row_attr' => ['class' => 'my-2'],
            ])
            ->add('parent', EntityType::class, [
                'class' => Category::class,
                "label" => "Catégorie parent",
                'label_attr' => ['class' => 'mb-1'],
                'row_attr' => ['class' => 'my-2'],
            ])
            ->add('Valider', SubmitType::class, [
                'attr' => ['class' => 'btn-dark mt-3']
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
