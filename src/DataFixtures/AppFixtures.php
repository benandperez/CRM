<?php

namespace App\DataFixtures;

use App\Entity\AdvertisingMedia;
use App\Entity\Amenities;
use App\Entity\AmenitiesProperty;
use App\Entity\ClientType;
use App\Entity\ConstructionType;
use App\Entity\Country;
use App\Entity\InterestLevel;
use App\Entity\ProgrammedActivity;
use App\Entity\TypeKitchen;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHashed)
    {
        $this->passwordHasher = $passwordHashed;
    }
    public function load(ObjectManager $manager)
    {
        /**
         * Data para las Amenidades
         */

        $amenities = new Amenities();
        $amenities->setName('GARITA DE SEGURIDAD');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('SALON SOCIAL');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('ESTACIONAMIENTO VISITAS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('PARQUE INFANTIL');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('ZONAS VERDES');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('ZONAS BARBIQUIU');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('PISCINA PARA ADULTOS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('PISCINA PARA NIÑOS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('SAUNA/TURCO JACUZZI');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('GIMNASIO O MAQUINAS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('GAS COMUNAL');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('LOCALES COMERCIALES');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('CANCHA DE TENIS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('BASKET Y VOLEY');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('CANCHA DE FUTBOL');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('ELEVADOR DE SERVICIOS');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);

        $amenities = new Amenities();
        $amenities->setName('ELEVADOR DE SHABAT');
        $amenities->setStatus(true);
        $amenities->setCreatedAt(new \DateTime());
        $amenities->setUpdatedAt(new \DateTime());
        $manager->persist($amenities);


        /**
         * Data para TIPO DE CONSTRUCCION
         */
        $constructionType = new ConstructionType();
        $constructionType->setName('BLOQUE-CONCRETO');
        $constructionType->setStatus(true);
        $constructionType->setCreatedAt(new \DateTime());
        $constructionType->setUpdatedAt(new \DateTime());
        $manager->persist($constructionType);

        $constructionType = new ConstructionType();
        $constructionType->setName('FORMALETA METALICA');
        $constructionType->setStatus(true);
        $constructionType->setCreatedAt(new \DateTime());
        $constructionType->setUpdatedAt(new \DateTime());
        $manager->persist($constructionType);

        $constructionType = new ConstructionType();
        $constructionType->setName('ESTRUCTURA DE ACERO Y TECHO AUTOPORTANTES');
        $constructionType->setStatus(true);
        $constructionType->setCreatedAt(new \DateTime());
        $constructionType->setUpdatedAt(new \DateTime());
        $manager->persist($constructionType);

        $constructionType = new ConstructionType();
        $constructionType->setName('ESTRUCTURA DE CONCRETO');
        $constructionType->setStatus(true);
        $constructionType->setCreatedAt(new \DateTime());
        $constructionType->setUpdatedAt(new \DateTime());
        $manager->persist($constructionType);

        /**
         * Data Tipo de Amenidades de la unidad
         */

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('SALA COMEDOR');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('ESTUDIO');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('SALA DE ESTAR');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('BALCON');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('ALCOBA DE SERVICIO');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('CLOSETS');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('WALKING CLOSET');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('BAÑO DE VISITAS');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('BAÑO DE SERVICIO');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('JACUZZI');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('ZONA DE LAVADO');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);

        $amenitiesProperty = new AmenitiesProperty();
        $amenitiesProperty->setName('DEPOSITO');
        $amenitiesProperty->setStatus(true);
        $amenitiesProperty->setCreatedAt(new \DateTime());
        $amenitiesProperty->setUpdatedAt(new \DateTime());
        $manager->persist($amenitiesProperty);


        /**
         * Tipo de cocinas
        */

        $typeKitchen = new TypeKitchen();
        $typeKitchen->setName('No Aplica');
        $typeKitchen->setStatus(true);
        $typeKitchen->setCreatedAt(new \DateTime());
        $typeKitchen->setUpdatedAt(new \DateTime());
        $manager->persist($typeKitchen);

        $typeKitchen = new TypeKitchen();
        $typeKitchen->setName('INTEGRAL');
        $typeKitchen->setStatus(true);
        $typeKitchen->setCreatedAt(new \DateTime());
        $typeKitchen->setUpdatedAt(new \DateTime());
        $manager->persist($typeKitchen);

        $typeKitchen = new TypeKitchen();
        $typeKitchen->setName('SEMINTEGRAL');
        $typeKitchen->setStatus(true);
        $typeKitchen->setCreatedAt(new \DateTime());
        $typeKitchen->setUpdatedAt(new \DateTime());
        $manager->persist($typeKitchen);

        /**
         * Data MEDIO PUBLICITARIO
         */

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 3.21');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('BASE DE DATOS');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('BROKER');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('CHAT FACEBOOK');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('CHAT INSTAGRAM');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('CHAT PAGINA WEB ');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('CHAT_INSTAGRAM_PTY');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('CHAT_WHATSAPP_MARKETING_PTY');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('COMPRA ALQUILE');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('DESCARGA WEB');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('ENCUENTRA 24');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('ENCUENTRA 24 BRISAS');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA CAPAC');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA DE ACOBIR');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA DE PROYECTOS');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA EXPO LIFESTYLE');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA EXPOVIVIENDA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA METROMALL');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA SAN MIGUELITO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA URBE');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FERIA WESTLAND MALL');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('FOTOCASA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('GLOBALIZA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('GO GET IT');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('GRAFICO PANAMA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('HABITACLIA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('IDEALISTA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('INFOHOGAR');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('INMOBILIA WEB');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('INSTAGRAM');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('LANDING_FORM_INSTAGRAM_PTY');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('LLAMADA TELEFONICA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('MAILING MASIVO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('MONETIZADORES');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('MUNDOVILLAS');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('OLX');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('PISOS.COM');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('REDES SOCIALES');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('REFERIDO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('REFERIDO BAU');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('REFERIDO REALTY');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 01.19');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 1.20');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 7.20');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 04.19');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 04.20');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('U.M. FACEBOOK 11.19');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('URBANIA MAKETING INSTAGRAM');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('URBANIA MARKETING');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('URBANIA MARKETING FACEBOOK');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('VALLA DE PROYECTO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('VISITA CASA MODELO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('VIVIENDAS INTERES SOCIAL ');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('VOLANTEO');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('WALLAPOP');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('WEB URBANIA');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('WINDEY');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        $advertisingMedia = new AdvertisingMedia();
        $advertisingMedia->setName('WOLF CONVERSION');
        $advertisingMedia->setStatus(true);
        $advertisingMedia->setCreatedAt(new \DateTime());
        $advertisingMedia->setUpdatedAt(new \DateTime());
        $manager->persist($advertisingMedia);

        /**
         * data NIVEL DE INTERES
         */

        $interestLevel = new InterestLevel();
        $interestLevel->setName('INDECISO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('AT. CLIENTE');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('CALIENTE');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('CITA CON CLIENTE');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('COMPRA A LARGO PLAZO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('COMPRA MEDIO PLAZO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('DATOS INCORRECTOS');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('EN SEGUIMIENTO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('FRIO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('GRINGO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('HORA DE LLAMADA');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('INTERESADO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('INVERSIONISTA');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('MALA REF APC');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('MUY INTERESADO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('NO RESPONDE');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('NUEVA ASIGNACION');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('TELEFONO NO EXISTE ');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('TIBIO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('VENDIDO');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        $interestLevel = new InterestLevel();
        $interestLevel->setName('VUELVE A PREGUNTAR');
        $interestLevel->setStatus(true);
        $interestLevel->setCreatedAt(new \DateTime());
        $interestLevel->setUpdatedAt(new \DateTime());
        $manager->persist($interestLevel);

        /**
         * Data Tipo de cliente
         */

        $clientType = new ClientType();
        $clientType->setName('ASALARIADO');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        $clientType = new ClientType();
        $clientType->setName('ESTANDAR');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        $clientType = new ClientType();
        $clientType->setName('INDEPENDIENTE');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        $clientType = new ClientType();
        $clientType->setName('INVERSOR');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        $clientType = new ClientType();
        $clientType->setName('SOCIEDAD');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        $clientType = new ClientType();
        $clientType->setName('VIP');
        $clientType->setStatus(true);
        $clientType->setCreatedAt(new \DateTime());
        $clientType->setUpdatedAt(new \DateTime());
        $manager->persist($clientType);

        /**
         * data Country
         */

        $country = new Country();
        $country->setName('AFGHANISTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ALBANIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ALGERIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('AMERICAN SAMOA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ANDORRA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ANGOLA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ANGUILLA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ANTARTIDA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ANTIGUA AND BARBUDA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ARGENTINA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ARMENIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ARUBA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('AUSTRALIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('AUSTRIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('AZERBAIJAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BAHAMAS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BAHRAIN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BANGLADESH');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BARBADOS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BELARUS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BELGIUM');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BELIZE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BENIN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BERMUDA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BHUTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BOLIVIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BOSNIA AND HERZEGOVINA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BOTSWANA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BOUVET ISLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BRAZIL');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BRITISH INDIAN OCEAN TERRITORY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BRUNEI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BULGARIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BURKINA FASO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('BURUNDI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CAMBODIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CAMEROON');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CANADA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CAPE VERDE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CAYMAN ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CENTRAL AFRICAN REPUBLIC');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CHAD');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CHILE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CHINA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CHRISTMAS ISLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('COCOS (KEELING) ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('COLOMBIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('COMOROS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CONGO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CONGO, THE DEMOCRATIC REPUBLIC OF THE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('COOK ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('COSTA RICA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CROATIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CUBA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CYPRUS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('CZECH REPUBLIC');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('DENMARK');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('DJIBOUTI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('DOMINICA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('DOMINICAN REPUBLIC');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('EAST TIMOR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ECUADOR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('EGYPT');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('EL SALVADOR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('EQUATORIAL GUINEA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ERITREA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ESTONIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ETHIOPIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FALKLAND ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FAROE ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FIJI ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FINLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FRANCE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FRENCH GUIANA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FRENCH POLYNESIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('FRENCH SOUTHERN TERRITORIES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GABON');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GAMBIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GEORGIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GERMANY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GHANA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GIBRALTAR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GREECE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GREENLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GRENADA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUADELOUPE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUAM');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUATEMALA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUINEA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUINEA-BISSAU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('GUYANA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HAITI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HEARD ISLAND AND MCDONALD ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HOLY SEE (VATICAN CITY STATE)');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HONDURAS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HONG KONG');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('HUNGARY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ICELAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('INDIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('INDONESIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('IRAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('IRAQ');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('IRELAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ISRAEL');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ITALY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('JAMAICA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('JAPAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('JORDAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('KAZAKSTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('KENYA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('KIRIBATI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('KUWAIT');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('KYRGYZSTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LAOS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LATVIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LEBANON');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LESOTHO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LIBERIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LIBYAN ARAB JAMAHIRIYA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LIECHTENSTEIN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LITHUANIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('LUXEMBOURG');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MACAO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MACEDONIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MADAGASCAR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MALAWI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MALAYSIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MALDIVES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MALI');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MALTA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MARSHALL ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MARTINIQUE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MAURITANIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MAURITIUS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MAYOTTE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MEXICO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MICRONESIA, FEDERATED STATES OF');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MOLDOVA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MONACO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MONGOLIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MONTSERRAT');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MOROCCO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MOZAMBIQUE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('MYANMAR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NAMIBIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NAURU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NEPAL');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NETHERLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NETHERLANDS ANTILLES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NEW CALEDONIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NEW ZEALAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NICARAGUA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NIGER');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NIGERIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NIUE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NORFOLK ISLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NORTH KOREA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NORTHERN MARIANA ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('NORWAY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('OMAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PAKISTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PALAU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PALESTINE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PANAMA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PAPUA NEW GUINEA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PARAGUAY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PERU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PHILIPPINES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PITCAIRN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('POLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PORTUGAL');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('PUERTO RICO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('QATAR');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ROMANIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('RUSSIAN FEDERATION');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('RWANDA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAINT HELENA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAINT KITTS AND NEVIS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAINT LUCIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAINT PIERRE AND MIQUELON');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAINT VINCENT AND THE GRENADINES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAMOA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAN MARINO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAO TOME AND PRINCIPE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SAUDI ARABIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SENEGAL');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SEYCHELLES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SIERRA LEONE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SINGAPORE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SLOVAKIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SLOVENIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SOLOMON ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SOMALIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SOUTH AFRICA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SOUTH KOREA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SPAIN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SRI LANKA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SUDAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SURINAME');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SVALBARD AND JAN MAYEN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SWAZILAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SWEDEN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SWITZERLAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('SYRIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TAIWAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TAJIKISTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TANZANIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('THAILAND');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TOGO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TOKELAU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TONGA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TRINIDAD AND TOBAGO');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TUNISIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TURKEY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TURKMENISTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TURKS AND CAICOS ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('TUVALU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UGANDA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UKRAINE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UNITED ARAB EMIRATES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UNITED KINGDOM');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UNITED STATES');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UNITED STATES MINOR OUTLYING ISLANDS');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('URUGUAY');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('UZBEKISTAN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('VANUATU');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('VENEZUELA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('VIETNAM');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('VIRGIN ISLANDS, BRITISH');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('VIRGIN ISLANDS, U.S.');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('WALLIS AND FUTUNA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('WESTERN SAHARA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('YEMEN');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('YUGOSLAVIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ZAMBIA');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        $country = new Country();
        $country->setName('ZIMBABWE');
        $country->setStatus(true);
        $country->setCreatedAt(new \DateTime());
        $country->setUpdatedAt(new \DateTime());
        $manager->persist($country);

        /**
         * data Actividad programada
         */

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('ADELANTO DE OBRA O ACTUALIZACION');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('BUSCAR DOCUMENTOS');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('CLIENTE LLAMO POR TELEFONO');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('CONFECCION DE FICHA DE COMPRADOR');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('ENVIAR CHAT');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('ENVIO DE CORREO');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('FERIA DE EMPRESAS');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('FERIAS DE PROYECTOS');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('LIBERAR CLIENTE');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('LLAMADA TELEFONICA');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('NO INTERESADO');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('SEGUIMIENTO DE CLIENTE ');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('VERIFICACION DE APC');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('VISITA A EMPRESA O DOMICILIO');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('VISITA DE CLIENTE A LA OFICINA');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('VISITA DE CLIENTE AL PROYECTO');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);

        $programmedActivity = new ProgrammedActivity();
        $programmedActivity->setName('VUELVE A PREGUNTAR');
        $programmedActivity->setStatus(true);
        $programmedActivity->setCreatedAt(new \DateTime());
        $programmedActivity->setUpdatedAt(new \DateTime());
        $manager->persist($programmedActivity);


        /**
         * Data empleados
         */
//        $employee = new Employees();
//        $employee->setFirstNames('Benjamin');
//        $employee->setLastNames('Perez');
//        $employee->setDocument('1143327');
//        $employee->setSubArea($subarea);
//        $employee->setDocumentType($documentType);
//        $employee->setCreatedAt(new \DateTime());
//        $employee->setUpdatedAt(new \DateTime());
//        $manager->persist($employee);

        $user = new User();
        $user->setFirstName('Angelica');
        $user->setLastName('Hernandez');
        $user->setEmail('angelica.hernandes@hotmail.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'password'));
        $user->setRoles(["ROLE_ADMIN"]);
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('Benjamin');
        $user->setLastName('Perez');
        $user->setEmail('benjamin.perez@hotmail.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'password'));
        $user->setRoles(["ROLE_USER"]);
        $manager->persist($user);


        $manager->flush();
    }
}
