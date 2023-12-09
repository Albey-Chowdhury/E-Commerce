<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Backend.home.index');
    }
    public function profile()
    {
        return view('Backend.home.users-profile');
    }
    public function contact()
    {
        return view('Backend.home.pages-contact');
    }
    
}
