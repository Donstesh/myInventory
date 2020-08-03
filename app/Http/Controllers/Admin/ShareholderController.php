<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shares;

class ShareholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Shares::paginate(5);
        return view('admin.share.shares',['shares'=>$shares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.share.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shares = new Shares();
        $shares->date_joined = $request->input('date_joined');
        $shares->name = $request->input('name');
        $shares->detail = $request->input('detail');
        $shares->amount_contributed = $request->input('amount_contributed');
        $shares->date_paid = $request->input('date_paid');
        $shares->id_no = $request->input('id_no');
        $shares->phone_no = $request->input('phone_no');
        $shares->next_of_kin = $request->input('next_of_kin');
        $shares->mode_of_payment = $request->input('mode_of_payment');
        $shares->save(); //persist the data
        return view('admin.share.new')->with('successMsg','Record Added Successfully');
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
        $drpt = Shares::findOrFail($id);
        $drpt->delete(1);
        return back()->with('errormsg', 'Record Deleted Successfully');
    }
}
