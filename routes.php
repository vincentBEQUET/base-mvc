<?php

// Create Router instance
$router = new Router();

//Localhost/project/ 'rien'
$router->get('/', 'PagesController@home' );
//Localhost/project/about (permet de mettre la route à suivre dans l'url)
$router->get('/about', 'PagesController@about');
$router->get('/contactez-nous', 'PagesController@contact');
$router->post('/contactez-nous', 'PagesController@traitementForm');
$router->get('/ajout-article', 'ArticlesController@ajoutArticle');
$router->post('/ajout-article', 'ArticlesController@AjoutArticle2');


//$router->get('/movies',         'MoviesController@index');      // SELECT all : Tous les éléments
//$router->get('/movies/add',     'MoviesController@add');        // CREATE one : Formulaire d'un élément
//$router->post('/movies/save',   'MoviesController@save');       // CREATE one (action) : Action du formulaire d'un élément
//$router->get('/movies/(\d+)',   'MoviesController@read');       // SELECT one : Affichage d'un élément

// Run it!
$router->run();