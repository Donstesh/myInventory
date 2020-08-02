<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = User::paginate(5);
        return view('admin.employees.employee',['emp'=>$emp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new User();
        $emp->p_photo = $request->input('p_photo');
        $emp->name = $request->input('name');
        $emp->email = $request->input('email');
        $emp->password = $request->input('password');
        $emp->id_no = $request->input('id_no');
        $emp->designation = $request->input('designation');
        $emp->salary = $request->input('salary');
        $emp->additional_info = $request->input('additional_info');
        $emp->save(); //persist the data
        return view('admin.employees.new')->with('successMsg','Employee Added Successfully');
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
        $emp = User::findOrFail($id);
        $emp->delete(1);
        return redirect()->route('admin.dailyreport.dailyreport')->with('errormsg', 'Employee Deleted Successfully');
    }
}
