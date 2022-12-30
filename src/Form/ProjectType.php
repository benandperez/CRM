<?php

namespace App\Form;

use App\Entity\Amenities;
use App\Entity\ConstructionType;
use App\Entity\Project;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'required' => True,
                'label' => 'NOMBRE DEL PROYECTO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'NOMBRE DEL PROYECTO',
                    'class' => 'form-control'
                ],
            ])
            ->add('shortName', null, [
                'required' => True,
                'label' => 'NOMBRE ABREVIADO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'NOMBRE ABREVIADO',
                    'class' => 'form-control'
                ],
            ])
            ->add('separatesWith', null, [
                'required' => True,
                'label' => 'SE SEPARA CON: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'SE SEPARA CON',
                    'class' => 'form-control'
                ],
            ])
            ->add('ubication', null, [
                'required' => True,
                'label' => 'UBICACION DEL PROYECTO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'UBICACION DEL PROYECTO',
                    'class' => 'form-control'
                ],
            ])
            ->add('projectFinishes', null, [
                'required' => True,
                'label' => 'ACABADOS DEL PROYECTO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'ACABADOS DEL PROYECTO',
                    'class' => 'form-control'
                ],
            ])
            ->add('constructionType', EntityType::class, [
                'class' => ConstructionType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('ct')
                        ->andWhere('ct.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('ct.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'TIPO DE CONSTRUCCION: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'TIPO DE CONSTRUCCION',
                ],
            ])
            ->add('amenities', EntityType::class, [
                'class' => Amenities::class,
                'required' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->andWhere('a.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('a.name', 'ASC');
                },
//                'choice_label' => function($employee, $key, $index) {
//                    /** @var Employees $employee */
//                    return $employee->getFirstName() . ' ' . $employee->getLastName();
//                },
                'choice_label' => 'name',
                'label' => 'Amenidades: ',
                'placeholder' => 'Select',
                'multiple' => true ,
                'attr' => [
                    'data-placeholder' => 'Seleccionar Amenidades',
                    'class' => 'select',
                ] ,
            ])
            ->add('elevators', null, [
                'required' => True,
                'label' => 'ELEVADORES: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'ELEVADORES',
                    'class' => 'form-control'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
