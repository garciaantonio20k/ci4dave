<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        /*
        return view('header',['title'=>'Home'])
            . view('Home/index')
            . view('footer');
        */
        // Usamos Layouts
        return view('home/index');
    }
}
