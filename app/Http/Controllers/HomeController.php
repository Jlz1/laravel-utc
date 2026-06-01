<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
        // Kenapa gak pake view('view.home'), karena view()
        // di dalam controller, akan slelau masuk folder views
    }
}
