<?php

namespace App\Http\Controllers\dashboard;

use App\Patients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        $patients = Patients::orderBy('date_confirm', 'desc')->paginate(10);
        return view('dashboard.patients.index', compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.patients.create');
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
            'date_confirm' => 'required',
            'case_number' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'travel_history' => 'required',
            'state' => 'required',
        ]);

        Patients::create($request->all());

        return redirect()->route('patient.index')
            ->with('success', 'Patient added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients = Patients::find($id);
        return view('dashboard.patients.show', compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = Patients::find($id);
        return view('dashboard.patients.edit', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date_confirm' => 'required',
            'case_number' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'travel_history' => 'required',
            'state' => 'required',
        ]);
        $patients = Patients::find($id);
        $patients->update($request->all());

        return redirect()->route('patient.index')
            ->with('success', 'Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patients::find($id);
        $patients->delete();
        return redirect()->route('patient.index')
            ->with('success', 'Patient deleted successfully');
    }
}
