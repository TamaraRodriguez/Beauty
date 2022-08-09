<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    public function home(){
        //Vista traida del web.php que se mostraba ahí inicialmente.
        //re view('welcome');
        return view('home');
    }
}
