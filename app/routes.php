<?php

/**
 * On définit dans le tableau associatif $routes la liste de nos routes.
 * Pour chaque route on définit :
 *    - son nom
 *    - path (qui apparait dans l'URL)
 *    -controller : fichier a appeler
 */

$routes = [
    // Page d'accueil
   'home' => [
      'path' => '/',
      'controller' => 'home.php'
   ],
//    Formulaire d'ajout d'une tache
   'add-task' => [
       'path' => '/add-task',
       'controller' => 'addTask.php'
   ],
// Modifier la tache
   'edit-task' => [
    'path' => '/edit-task',
    'controller' => 'editTask.php'
   ],
   // Suppression d'une tâche
   'delete-task' => [
      'path' => '/delete-task',
      'controller' => 'deleteTask.php'
   ],

    // Création de compte
   'signup' => [
      'path' => '/signup',
      'controller' => 'signup.php'
   ],

    // Connexion utilisateur
    'login' => [
        'path' => '/login',
        'controller' => 'login.php'
    ],

    // Déconnexion
     'logout' => [
        'path' => '/logout',
        'controller' => 'logout.php'
        ],
];

return $routes;