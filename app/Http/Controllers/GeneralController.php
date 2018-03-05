<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function home (){
        return view('pages.index');
    }
    public function services (){
        return view('pages.services');
    }
    public function products (){
        return view('pages.products');
    }
    public function contact (){
        return view('pages.contact');
    }
}
