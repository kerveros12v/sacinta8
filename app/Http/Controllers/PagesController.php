<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function plantillabase()
    {
        return view('plantillabase');
    }
}
