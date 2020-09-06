<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use App\Dailyeport;
use App\Medication;
use App\Shares;
use App\Costoverhead;
use App\Requisition;
use DB;

class HomeController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard 
     * are allowed.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function expenditure()
    {
        $totalreq = DB::table('requisitions')->where('status', 'Paid')->get()->sum('requisition_amount');
        $totalcoh = DB::table('costoverheads')->where('status', 'Paid')->get()->sum('amount');
        $totalexpenditure = ($totalcoh + $totalreq);
        return view('admin.expenditure.expenditure',['totalreq'=>$totalreq,
                                                     'totalcoh'=>$totalcoh,
                                                     'totalexpenditure'=>$totalexpenditure]);
    }
    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User::count();
        $admins = Admin::count();
        $drpt = Dailyeport::count();
        $medics = Medication::count();
        $shares = Shares::count();
        $cohs = Costoverhead::count();
        $reqs = Requisition::count();
        $totalreq = DB::table('requisitions')->where('status', 'Paid')->get()->sum('requisition_amount');
        $totalcoh = DB::table('costoverheads')->where('status', 'Paid')->get()->sum('amount');
        $totalexpenditure = ($totalcoh + $totalreq);
        return view('admin.home',['totalreq'=>$totalreq,
                                                     'totalcoh'=>$totalcoh,
                                                     'totalexpenditure'=>$totalexpenditure,
                                                     'employees' => $employees,
                                    'admins' => $admins,
                                    'drpt' => $drpt,
                                    'medics' => $medics,
                                    'shares' => $shares,
                                    'cohs' => $cohs,
                                    'reqs' => $reqs,]);
    }
}

