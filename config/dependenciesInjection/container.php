<?php

// Nouvelle instance du constructeur du container

    $builder = new DI\ContainerBuilder();

// Ajout des définitions (les dépendances internes de notre application)

    $builder->addDefinitions(__DIR__ . "/dependencies.php");

// Création d'un container grâce à son builder
    $container = $builder->build();


// Dès que ce fichier container sera appelé (require) il doit nous retourner le container
    return $container;