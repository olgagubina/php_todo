<?php

namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('db')->selectAll('tasks');

        require view('index');
    }

    public function about()
    {
        $mood = 'cheerfully';

        require view('about', ['mood' => $mood]); //passing data to component
    }

    public function contact()
    {
        require view('contact');
    }
}