<?php

namespace App\Controllers;
use App\Core\App;

class UserController
{
    public function index ()
    {
        $users = App::get('db')->selectAll('users');
        return require view('users');
    }

    public function store ()
    {
        App::get('db')->insert('users', [
            'name' => $_POST['name']
        ]);

        redirect('/users');
    }
}