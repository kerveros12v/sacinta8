<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    public function plantillabase()
    {
        return view('plantillabase');
    }
    public function sexos1()
    {
        $sex = 'App\Models\Sexo'::all();
        return view('sexo', compact('sex'));
    }
    function inicio()
    {
        return view('welcome');
    }
}
