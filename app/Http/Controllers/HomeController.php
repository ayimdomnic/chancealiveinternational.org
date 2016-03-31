<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    

    #controller methods for the static pages
    public function index()
    {
        return view('pages.home');
    }

    public function whoWeAre()
    {
        return view('pages.about');
    }

    public function whatWedo()
    {
        return view('pages.what-we-do');
    }

    public function howWedo(){
        return view('pages.how-we-do');
    }
    public function contactUs(){
        return view ('pages.contact-us');
    }
}
