<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Medication;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medics = Medication::paginate(5);
        return view('admin.medication.medication',['medics'=>$medics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medication.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medics = new Medication();
        $medics->date = $request->input('date');
        $medics->vaccine = $request->input('vaccine');
        $medics->mode_of_adminstration = $request->input('mode_of_adminstration');
        $medics->period = $request->input('period');
        $medics->remarks = $request->input('remarks');
        $medics->save(); //persist the data
        return view('admin.medication.new')->with('successMsg','Record Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drpt = Medication::findOrFail($id);
        $drpt->delete(1);
        return redirect()->route('admin.medication.medication')->with('errormsg', 'Record Deleted Successfully');
    }
}
