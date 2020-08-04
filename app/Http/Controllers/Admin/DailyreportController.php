<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Dailyeport;

class DailyreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drpts = Dailyeport::paginate(5);
        return view('admin.dailyreport.dailyreport',['drpts'=>$drpts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dailyreport.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drpt = new Dailyeport();
        $drpt->date = $request->input('date');
        $drpt->time = $request->input('time');
        $drpt->task = $request->input('task');
        $drpt->problem_encountered = $request->input('problem_encountered');
        $drpt->report = $request->input('report');
        $drpts->by = Auth::guard('admin')->user()->name;
        $drpt->save(); //persist the data
        return view('admin.dailyreport.new')->with('successMsg','Record Added Successfully');
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
        $drpts = Dailyeport::find($id);
        return view('admin.dailyreport.edit',['drpts'=> $drpts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $drpt = Dailyeport::find($request->input('id'));
        $drpt->date = $request->input('date');
        $drpt->time = $request->input('time');
        $drpt->task = $request->input('task');
        $drpt->problem_encountered = $request->input('problem_encountered');
        $drpt->report = $request->input('report');
        $drpts->by = Auth::guard('admin')->user()->name;
        $drpt->save($request->all()); //persist the data
        //return back()->with('successMsg','Record Added Successfully');
        $drpts = Dailyeport::paginate(5);
        return view('admin.dailyreport.dailyreport',['drpts'=>$drpts])->with('successMsg','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drpt = Dailyeport::findOrFail($id);
        $drpt->delete(1);
        return back()->with('errormsg', 'Record Deleted Successfully');
    }
}
