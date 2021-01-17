<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function plantillabase()
    {
        return view('plantillabase');
    }
    public function sexos1()
    {
        return view('sexo');
    }
    function inicio()
    {
        return view('welcome');
    }
}
