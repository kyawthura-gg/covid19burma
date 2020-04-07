<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function helpLink()
    {
        return view('helplink');
    }
    public function report()
    {
        return view('report');
    }
    public function about()
    {
        return view('about');
    }
    public function cluster()
    {
        return view('cluster');
    }
    public function contactus()
    {
        return view('contactus');
    }
}
