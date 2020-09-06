<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Costoverhead;

class CohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohs = Costoverhead::get();
        $totalcoh = Costoverhead::sum('amount');
        return view('admin.coh.costoverhead',['cohs'=>$cohs,
                                              'totalcoh'=>$totalcoh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coh.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cohs = new Costoverhead();
        $cohs->date = $request->input('date');
        $cohs->service = $request->input('service');
        $cohs->category = $request->input('category');
        $cohs->amount = $request->input('amount');
        $cohs->status = $request->input('status');
        $cohs->by = Auth::guard('admin')->user()->name;
        $cohs->save(); //persist the data
        $cohs = Costoverhead::get();
        $totalcoh = Costoverhead::sum('amount');
        return view('admin.coh.costoverhead',['cohs'=>$cohs,
                                              'totalcoh'=>$totalcoh])->with('successMsg','Record Added Successfully');
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
        $cohs = Costoverhead::find($id);
        return view('admin.coh.edit',['cohs'=> $cohs]);
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
        //Retrieve the employee and update
        $cohs = Costoverhead::find($request->input('id'));
        $cohs->date = $request->input('date');
        $cohs->service = $request->input('service');
        $cohs->category = $request->input('category');
        $cohs->amount = $request->input('amount');
        $cohs->status = $request->input('status');
        $cohs->by = Auth::guard('admin')->user()->name;
        $cohs->save($request->all()); //persist the data
        $cohs = Costoverhead::get();
        $totalcoh = Costoverhead::sum('amount');
        return view('admin.coh.costoverhead',['cohs'=>$cohs,
                                              'totalcoh'=>$totalcoh])->with('successMsg','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drpt = Costoverhead::findOrFail($id);
        $drpt->delete(1);
        return back()->with('errormsg', 'Record Deleted Successfully');
    }
}
