<?php

namespace App\Http\Controllers;

class GeneralController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('about');
    }
}
