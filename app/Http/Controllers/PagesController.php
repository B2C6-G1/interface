<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the home page.
     * 
     * @return Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
}
