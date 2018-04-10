<?php

//fetch tasks from DB
$tasks = App::get('db')->selectAll('tasks');
$users = App::get('db')->selectAll('users');

require 'views/index.views.php';