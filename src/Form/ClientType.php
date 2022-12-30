<?php

namespace App\Form;

use App\Entity\AdvertisingMedia;
use App\Entity\Client;
use App\Entity\ClientType as  CT;
use App\Entity\ConstructionType;
use App\Entity\Country;
use App\Entity\InterestLevel;
use App\Entity\ProgrammedActivity;
use App\Entity\Project;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('project', EntityType::class, [
                'class' => Project::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->andWhere('p.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('p.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Project: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'Project',
                ],
            ])
            ->add('advertisingMedia', EntityType::class, [
                'class' => AdvertisingMedia::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('am')
                        ->andWhere('am.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('am.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'MEDIO PUBLICITARIO: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'MEDIO PUBLICITARIO',
                ],
            ])
            ->add('interestLevel', EntityType::class, [
                'class' => InterestLevel::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('il')
                        ->andWhere('il.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('il.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'NIVEL DE INTERES: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'NIVEL DE INTERES',
                ],
            ])
            ->add('clientType', EntityType::class, [
                'class' => CT::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('ct')
                        ->andWhere('ct.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('ct.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'TIPO DE CLIENTE: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'TIPO DE CLIENTE',
                ],
            ])
//            ->add('keyForQuery', null, [
//                'required' => True,
//                'label' => 'CAMPO CLAVE PARA CONSULTA: ',
//                'attr' => [
//                    'autocomplete' => 'off',
//                    'placeholder' => 'CAMPO CLAVE PARA CONSULTA',
//                    'class' => 'form-control'
//                ],
//            ])
            ->add('country', EntityType::class, [
                'class' => Country::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->andWhere('c.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'PAIS DE ORIGEN: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'PAIS DE ORIGEN',
                ],
            ])
            ->add('firstName', null, [
                'required' => True,
                'label' => 'PRIMER NOMBRE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'PRIMER NOMBRE',
                    'class' => 'form-control'
                ],
            ])
            ->add('secondName', null, [
                'required' => True,
                'label' => 'SEGUNDO NOMBRE: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'SEGUNDO NOMBRE',
                    'class' => 'form-control'
                ],
            ])
            ->add('LastName', null, [
                'required' => True,
                'label' => 'APELLIDO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'APELLIDO',
                    'class' => 'form-control'
                ],
            ])
            ->add('secondLastName', null, [
                'required' => True,
                'label' => 'SEGUNDO APELLIDO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'SEGUNDO APELLIDO',
                    'class' => 'form-control'
                ],
            ])
            ->add('landline', null, [
                'required' => True,
                'label' => 'TELEFONO: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'TELEFONO',
                    'class' => 'form-control'
                ],
            ])
            ->add('cellPhone', null, [
                'required' => True,
                'label' => 'TEL. MOVIL: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'TEL. MOVIL',
                    'class' => 'form-control'
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => True,
                'label' => 'E-mail: ',
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'E-mail',
                    'class' => 'form-control'
                ],
            ])
            ->add('nextContact', DateTimeType::class,[
                'widget' => 'single_text',
//                'attr' => [
//                    'class' => 'form-control input-inline datetimepicker',
//                    'data-provide' => 'datetimepicker',
//
//                ],
            ])
            ->add('programmedActivity', EntityType::class, [
                'class' => ProgrammedActivity::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('pa')
                        ->andWhere('pa.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('pa.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'ACTIVIDAD PROGRAMADA: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'ACTIVIDAD PROGRAMADA',
                ],
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->andWhere('u.status = :status')
                        ->setParameter('status', '1')
                        ->orderBy('u.firstName', 'ASC');
                },
                'choice_label' => function($user, $key, $index) {
                    /** @var User $user */
                    return $user->getFirstName() . ' ' . $user->getLastName();
                },
                'label' => 'VENDEDOR: ',
                'required' => True,
                'attr' => [
                    'class' => 'select',
                    'placeholder' => 'VENDEDOR',
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
            'data_class' => Client::class,
        ]);
    }
}
