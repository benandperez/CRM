<?php

namespace App\Form;

use App\Entity\Amenities;
use App\Entity\AmenitiesProperty;
use App\Entity\ConstructionType;
use App\Entity\ProgrammedActivity;
use App\Entity\PropertyClass;
use App\Entity\PropertyType;
use App\Entity\StatusUnits;
use App\Entity\TypeKitchen;
use App\Entity\Units;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UnitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statusUnits', EntityType::class, [
                'class' => StatusUnits::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('su')
                        ->andWhere('su.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('su.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'ESTADO ACTUAL: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'ESTADO ACTUAL',
                ],
            ])
            ->add('propertyType', EntityType::class, [
                'class' => PropertyType::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('pt')
                        ->andWhere('pt.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('pt.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'TIPO DE INMUEBLE: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'TIPO DE INMUEBLE',
                ],
            ])
            ->add('propertyClass', EntityType::class, [
                'class' => PropertyClass::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('pc')
                        ->andWhere('pc.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('pc.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'CLASE DE INMUEBLE: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'CLASE DE INMUEBLE',
                ],
            ])
            ->add('number', null, [
                'required' => True,
                'label' => 'NUMERO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'NUMERO',
                    'class' => 'form-control'
                ],
            ])
            ->add('model', null, [
                'required' => True,
                'label' => '¿ES EL MODELO?: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => '¿ES EL MODELO?',
                    'class' => 'form-control'
                ],
            ])

            ->add('tower', null, [
                'required' => True,
                'label' => 'TORRE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'TORRE',
                    'class' => 'form-control'
                ],
            ])
            ->add('level', null, [
                'required' => True,
                'label' => 'NIVELPISO Nº: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'NIVELPISO Nº',
                    'class' => 'form-control'
                ],
            ])
            ->add('floor', null, [
                'required' => True,
                'label' => 'PISO Nº: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'PISO Nº',
                    'class' => 'form-control'
                ],
            ])
            ->add('modelType', null, [
                'required' => True,
                'label' => 'MODELO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'MODELO',
                    'class' => 'form-control'
                ],
            ])
            ->add('module', null, [
                'required' => True,
                'label' => 'MODULO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'MODULO',
                    'class' => 'form-control'
                ],
            ])
            ->add('street', null, [
                'required' => True,
                'label' => 'CALLE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'CALLE',
                    'class' => 'form-control'
                ],
            ])

            ->add('lotArea', null, [
                'required' => True,
                'label' => 'AREA DEL LOTE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'AREA DEL LOTE',
                    'class' => 'form-control'
                ],
            ])
            ->add('additionalMeters', null, [
                'required' => True,
                'label' => 'METROS ADICIONALES: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'METROS ADICIONALES',
                    'class' => 'form-control'
                ],
            ])
            ->add('totalLotArea', null, [
                'required' => True,
                'label' => 'TOTAL AREA LOTE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'TOTAL AREA LOTE',
                    'class' => 'form-control'
                ],
            ])
            ->add('closedArea', null, [
                'required' => True,
                'label' => 'AREA CERRADA: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'AREA CERRADA',
                    'class' => 'form-control'
                ],
            ])
            ->add('openArea', null, [
                'required' => True,
                'label' => 'AREA ABIERTA: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'AREA ABIERTA',
                    'class' => 'form-control'
                ],
            ])
            ->add('totalArea', null, [
                'required' => True,
                'label' => 'TOTAL AREA: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'TOTAL AREA',
                    'class' => 'form-control'
                ],
            ])

            ->add('amenitiesProperty', EntityType::class, [
                'class' => AmenitiesProperty::class,
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
            ->add('bedRooms', null, [
                'required' => True,
                'label' => 'RECAMARAS: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'RECAMARAS',
                    'class' => 'form-control'
                ],
            ])
            ->add('closets', null, [
                'required' => True,
                'label' => 'CLOSETS: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'CLOSETS',
                    'class' => 'form-control'
                ],
            ])
            ->add('bathrooms', null, [
                'required' => True,
                'label' => 'BAÑOS: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'BAÑOS',
                    'class' => 'form-control'
                ],
            ])
            ->add('halfBathrooms', null, [
                'required' => True,
                'label' => 'MEDIOS BAÑOS: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'MEDIOS BAÑOS',
                    'class' => 'form-control'
                ],
            ])
            ->add('typeKitchen', EntityType::class, [
                'class' => TypeKitchen::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('ct')
                        ->andWhere('ct.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('ct.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'COCINA: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'COCINA',
                ],
            ])
            ->add('parkingLots', null, [
                'required' => True,
                'label' => 'ESTACIONAMIENTOS: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'ESTACIONAMIENTOS',
                    'class' => 'form-control'
                ],
            ])
            ->add('price', null, [
                'required' => True,
                'label' => 'PRECIO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'PRECIO',
                    'class' => 'form-control'
                ],
            ])

            ->add('observations', null, [
                'required' => True,
                'label' => 'OBSERVACIONES: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'OBSERVACIONES',
                    'class' => 'form-control'
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Units::class,
        ]);
    }
}
