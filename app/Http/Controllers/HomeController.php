<?php

namespace App\Http\Controllers;

use App\Models\main_categerys;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

public function index()
{


       $main= main_categerys::with('subcat')->select()->where('translation_lang',get_default_lang())->get();
    
    return view('Front.home',compact('main'));
}
     
  
}
