<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Cases;
use App\Blogs;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

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
        $cases = DB::table('cases')
            ->select(DB::raw('SUM(confirm_case) as confirm_case, SUM(deaths) as deaths,SUM(recovered) as recovered,state'))
            ->groupBy('state')
            ->orderBy('confirm_case', 'DESC')
            ->get();

        // $cases = Cases::orderBy('date_confirm', 'desc')->paginate(15);
        $total_confirm = DB::table('cases')->sum('confirm_case');
        $deaths = DB::table('cases')->sum('deaths');
        $recovered = DB::table('cases')->sum('recovered');
        $active = $total_confirm - ($deaths + $recovered);

        $today_confirm = Cases::whereDate('date_confirm', Carbon::today())
            ->sum('confirm_case');
        $today_deaths = Cases::whereDate('created_at', Carbon::today())
            ->sum('deaths');
        $today_recovered = Cases::whereDate('created_at', Carbon::today())
            ->sum('recovered');

        $state = $this->stateStatus();
        return view('index', compact(
            'cases',
            'total_confirm',
            'deaths',
            'recovered',
            'active',
            'state',
            'today_confirm',
            'today_deaths',
            'today_recovered',
        ))->with('i', (request()->input('page', 1) - 1) * 15);
    }
    public function todayCase()
    {
    }
    public function caseStatus($state)
    {
        $getConfrim = DB::table('cases')
            ->where('state', '=', $state)
            ->sum('confirm_case');
        $getDeath = DB::table('cases')
            ->where('state', '=', $state)
            ->sum('deaths');
        $getRecover = DB::table('cases')
            ->where('state', '=', $state)
            ->sum('recovered');
        if ($getConfrim > 0 && $getConfrim <= 10) {
            $colorCode = "#f5c8b4";
        } elseif ($getConfrim > 10 && $getConfrim <= 30) {
            $colorCode = "#eb7a5d";
        } elseif ($getConfrim > 30 && $getConfrim <= 100) {
            $colorCode = "#da4c3b";
        } elseif ($getConfrim > 100) {
            $colorCode = "#ad2b26";
        } else {
            $colorCode = "";
        }
        return [$getConfrim, $getDeath, $getRecover, $colorCode];
    }
    public function stateStatus()
    {
        $yangon = $this->caseStatus('Yangon');
        $mandalay = $this->caseStatus('Mandalay');
        $magway = $this->caseStatus('Magway');
        $sagaing = $this->caseStatus('Sagaing');
        $tanintharyi = $this->caseStatus('Tanintharyi');
        $bago = $this->caseStatus('Bago');
        $naypyitaw = $this->caseStatus('Naypyitaw');
        $ayeyarwady = $this->caseStatus('Ayeyarwady');
        $kachin = $this->caseStatus('Kachin');
        $kayah = $this->caseStatus('Kayah');
        $kayin = $this->caseStatus('Kayin');
        $chin = $this->caseStatus('Chin');
        $mon = $this->caseStatus('Mon');
        $rakhine = $this->caseStatus('Rakhine');
        $shan = $this->caseStatus('Shan');
        $state = collect([
            $yangon, $mandalay, $magway, $sagaing, $tanintharyi,
            $bago, $naypyitaw, $ayeyarwady, $kachin, $kayah,
            $kayin, $chin, $mon, $rakhine, $shan
        ]);
        return $state;
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
    public function cases()
    {
        return view('case');
    }
    public function news()
    {
        $blogs = Blogs::orderBy('source_date', 'desc');
        return view('news', compact('blogs'));
    }
    public function reportByState()
    {
        $result = DB::table('cases')
            ->select(DB::raw('SUM(confirm_case) as confirm_case, SUM(deaths) as deaths,SUM(recovered) as recovered,state'))
            ->groupBy('state')
            ->orderBy('confirm_case', 'DESC')
            ->get();
        return response()->json($result);
    }
    public function reportByDate()
    {
        $date_cases = DB::table('cases')
            ->select(DB::raw('SUM(confirm_case) as confirm_case, SUM(deaths) as deaths,SUM(recovered) as recovered,date_confirm'))
            ->groupBy('date_confirm')
            ->orderBy('date_confirm', 'ASC')
            ->get();
        return response()->json($date_cases);
    }
    public function casesReport()
    {
        $cases = DB::table('patients')
            ->select(DB::raw('Count(*) as confirm_case,date_confirm'))
            ->where('status', '=', 'Case')
            ->groupBy('date_confirm')
            ->orderBy('confirm_case', 'ASC')
            ->get();
        return response()->json($cases);
    }
}
