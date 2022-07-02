<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
    //
    function AboutUs(){
        return view('ecommerce.About');
    }
}
