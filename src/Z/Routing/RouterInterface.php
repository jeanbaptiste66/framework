<?php
namespace App\Z\Routing;

    Interface RouterInterface
    {

        /**
         * Cette méthode du routeur récupère les controleurs, les trie et les sauvegarde dans l'armoire à routes en fonction de leur nom 
         * @param array $controllers
         * @return void
         */

        Public function sortRoutesByName(array $controllers) : void;

        /**
         * Cette méthode du routeur permet de l'exécuter
         * et elle nous retourne une réponse qui peutêtre
         *      - nulle si l'uri de l'url ne matche pas avec l'uri de la route dont l'application attend la réception
         *      - un tableau contenant le controleur censé gérer la requête siça matche
         * @return array | null
         */
        public function run() : ?array;

    }