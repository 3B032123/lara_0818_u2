<?php

namespace App\Http\Controllers;

class HomeController extends Controlle
{
    public function index()
    {
        returnview('home.index');
    }
}
