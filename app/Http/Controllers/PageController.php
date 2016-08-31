<?php

namespace App\Http\Controllers;

use App\User;

class PageController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index() {
  
        return view('login');
    }
}
