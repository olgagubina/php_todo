<?php

use App\Core\App;

App::bind('config', $config = require 'config.php');

App::bind('db', new QueryBuilder(
    Connection::make($config['database'])
));

function view($name)
{
    return "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}

//Before DI container (App) creation
//$app = [];
////receive all data for DB connection from config file (more safe)
//$app['config'] = require 'config.php';
//
////create new instance of query class that saves the fetch of DB and can traverse through
//$app['db'] = new QueryBuilder(
//    //call the static method of making connection to DB and get back PDO (php data object)
//    Connection::make($app['config']['database'])
//);