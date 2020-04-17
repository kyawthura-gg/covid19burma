<?php

namespace App\Http\Controllers\dashboard;

use App\Cases;
use App\Http\Controllers\Controller;
use App\States;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Cases::orderBy('date_confirm', 'desc')->paginate(10);
        $total_confirm = DB::table('cases')->sum('confirm_case');
        $deaths = DB::table('cases')->sum('deaths');
        $recovered = DB::table('cases')->sum('recovered');
        $active = $total_confirm - ($deaths + $recovered);
        return view('dashboard.cases.index', compact('cases', 'total_confirm', 'deaths', 'recovered', 'active'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = DB::table('states')->get();
        return view('dashboard.cases.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'state' => 'required',
            'date_confirm' => 'required',
            'confirm_case' => 'required',
            'deaths' => 'required',
            'recovered' => 'required',
        ]);

        Cases::create($request->all());

        return redirect()->route('cases.index')
            ->with('success', 'Case created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cases = Cases::find($id);
        return view('dashboard.cases.show', compact('cases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = DB::table('states')->get();
        $cases = Cases::find($id);
        return view('dashboard.cases.edit', compact('cases', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'state' => 'required',
            'date_confirm' => 'required',
            'confirm_case' => 'required',
            'deaths' => 'required',
            'recovered' => 'required',
        ]);
        $cases = Cases::find($id);
        $cases->update($request->all());

        return redirect()->route('cases.index')
            ->with('success', 'Case updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cases = Cases::find($id);
        $cases->delete();
        return redirect()->route('cases.index')
            ->with('success', 'Case deleted successfully');
    }
}
