<?php

// Chargement de l'autoloader de composer

    require_once __DIR__ . "/../vendor/autoload.php";

// chargement des variables d'environnement
    $dotenv = Dotenv\Dotenv::createImmutable(dirname (__DIR__));
    $dotenv->load();

// Chargement du container de dépendances

require_once __DIR__ . "/dependenciesInjection/container.php";
