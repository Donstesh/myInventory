<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requisition;

class RequisitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqs = Requisition::paginate(5);
        return view('admin.req.requisition',['reqs'=>$reqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.req.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reqs = new Requisition();
        $reqs->date = $request->input('date');
        $reqs->detail = $request->input('detail');
        $reqs->quantity = $request->input('quantity');
        $reqs->requisition_amount = $request->input('requisition_amount');
        $reqs->category = $request->input('category');
        $reqs->status = 'Pending';
        $reqs->save(); //persist the data
        $reqs = Requisition::paginate(5); 
        return view('admin.req.requisition',['reqs'=>$reqs])->with('successMsg','Record Updated Successfully');
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
    
        $reqs = Requisition::find($id);
        return view('admin.req.aprove',['reqs'=> $reqs]);
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
        $reqs = Requisition::find($request->input('id'));
        $reqs->date = $request->input('date');
        $reqs->detail = $request->input('detail');
        $reqs->quantity = $request->input('quantity');
        $reqs->requisition_amount = $request->input('requisition_amount');
        $reqs->category = $request->input('category');
        $reqs->status = $request->input('status');
        $reqs->save($request->all()); //persist the data
        //return back()->with('successMsg','Record Added Successfully');
        $reqs = Requisition::paginate(5);
        return view('admin.req.requisition',['reqs'=>$reqs])->with('successMsg','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = Requisition::findOrFail($id);
        $req->delete();
        return back();
    }
}
