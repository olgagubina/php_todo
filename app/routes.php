<?php

$router->get('','PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UserController@index');
$router->post('users', 'UserController@store');

//$router->define (
//    [
//        '' => 'controllers/index.php',
//        'about' => 'controllers/about.php',
//        'contact' => 'controllers/contact.php',
//        'names' => 'controllers/add-name.php'
//    ]
//);

//$router->get('','controllers/index.php');
//$router->get('about', 'controllers/about.php');
//$router->get('contact', 'controllers/contact.php');
//$router->post('names', 'controllers/add-name.php');