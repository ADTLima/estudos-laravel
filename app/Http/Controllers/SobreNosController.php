<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function SobreNos(){
        return view('site.sobre-nos');
    }
}
