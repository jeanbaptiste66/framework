<?php

use App\Kernel;



// Bienvenur dans notre framework fait maison
//-------------------------------------------------------------------
// L'index.php représente le 'FontController'
// Ses rôles :
//      Charger le fichier de configuration
//      Créer une nouvelle instance du noyau
//      Récupérer la réponse qui sera envoyé au navigateur




// Chargement du fichier de configuration
    require_once dirname(__DIR__) . "/config/bootstrap.php";


// Création d'une nouvelle instance du noyau de l'application
    // $app = new App\Kernel();
    $kernel = new App\Kernel($container);

/**
 * Le fontController demande au noyau de soummettre la requêteet de récupérer la réponse correspondante
 */

// Soumission de la requête au noyau
// Récupération de la réponse
    $response = $kernel->handleRequest();



// Envoi de la réponse au navigateur