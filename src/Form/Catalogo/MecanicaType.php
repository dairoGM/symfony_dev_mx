<?php

namespace App\Form\Catalogo;

use App\Entity\Catalogo\Grupo;
use App\Entity\Catalogo\Cedis;
use App\Entity\Catalogo\Mecanica;
use App\Entity\Catalogo\Territorio;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class MecanicaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('clave', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'allowEmptyString' => true,
                        'maxMessage' => 'El número máximo de caracteres permitidos es 10',
                        'max' => 10,
                    ]),
                ]
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'required' => false,
            ])
            ->add('activo', CheckboxType::class, [
                'required' => false,
                'label' => 'Habilitado'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mecanica::class,
        ]);
    }
}
