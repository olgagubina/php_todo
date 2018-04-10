<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Services\Router;
use App\Core\Request;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());