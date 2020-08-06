<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Str;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = User::paginate(5);
        return view('admin.employees.employee',['emps'=>$emps]);
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
        $emps = new User();
        $emps->p_photo = $request->input('p_photo');
        $emps->name = $request->input('name');
        $emps->email = $request->input('email');
        $emps->password = bcrypt($request->input('password'));
        $emps->id_no = $request->input('id_no');
        $emps->designation = $request->input('designation');
        $emps->salary = $request->input('salary');
        $emps->additional_info = $request->input('additional_info');
        $emps->by = Auth::guard('admin')->user()->name;
        $emps->save(); //persist the data
        return view('admin.employees.employee')->with('successMsg','Employee Added Successfully');
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
        $emps = User::find($id);
        return view('admin.employees.edit',['emps'=> $emps]);
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
        $emps = User::find($request->input('id'));
        $emps->p_photo = $request->input('p_photo');
        $emps->name = $request->input('name');
        $emps->email = $request->input('email');
        $emps->password = bcrypt($request->input('password'));
        $emps->id_no = $request->input('id_no');
        $emps->designation = $request->input('designation');
        $emps->salary = $request->input('salary');
        $emps->additional_info = $request->input('additional_info');
        $emps->by = Auth::guard('admin')->user()->name;
        $emps->save($request->all()); //persist the data
        //return back()->with('successMsg','Record Added Successfully');
        $emps = User::paginate(5);
        return view('admin.employees.employee',['emps'=>$emps])->with('successMsg','Record Added Successfully');
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
        return back()->with('errormsg', 'Employee Deleted Successfully');
    }
}
