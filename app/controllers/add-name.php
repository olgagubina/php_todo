<?php

App::get('db')->insert('users', [
    'name' => $_POST['name']
 ]);

 header('Location: /');