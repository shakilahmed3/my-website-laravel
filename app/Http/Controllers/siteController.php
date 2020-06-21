<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function showHome(){
        return view('home');
    }

    function showAbout(){
        return view('about');
    }

    function showService(){
        return view('service');
    }
    function showProtfolio(){
        return view('portfolio');
    }

}
