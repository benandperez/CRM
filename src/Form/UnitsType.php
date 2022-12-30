<?php

namespace App\Form;

use App\Entity\Amenities;
use App\Entity\AmenitiesProperty;
use App\Entity\ConstructionType;
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
            ->add('number')
            ->add('model')
            ->add('tower')
            ->add('level')
            ->add('floor')
            ->add('modelType')
            ->add('module')
            ->add('street')
            ->add('lotArea')
            ->add('additionalMeters')
            ->add('totalLotArea')
            ->add('closedArea')
            ->add('openArea')
            ->add('totalArea')
            ->add('bedRooms')
            ->add('closets')
            ->add('bathrooms')
            ->add('halfBathrooms')
            ->add('parkingLots')
            ->add('observations')
            ->add('price')
            ->add('statusUnits')
            ->add('propertyType')
            ->add('propertyClass')
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
            ->add('typeKitchen', EntityType::class, [
                'class' => TypeKitchen::class,
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Units::class,
        ]);
    }
}
