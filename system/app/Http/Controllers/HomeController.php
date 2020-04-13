<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Cases;

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
        $cases = Cases::orderBy('date_confirm', 'desc')->paginate(15);
        $total_confirm = DB::table('cases')->sum('confirm_case');
        $deaths = DB::table('cases')->sum('deaths');
        $recovered = DB::table('cases')->sum('recovered');
        $active = $total_confirm - ($deaths + $recovered);
        return view('index', compact('cases', 'total_confirm', 'deaths', 'recovered', 'active'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
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
