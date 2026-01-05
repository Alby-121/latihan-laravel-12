<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Halaman Home
    public function index()
    {
        return view('home');
        // return 'halo controller';
    }
    
    public function login()
    {
        return view('login');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('news');
    }
}