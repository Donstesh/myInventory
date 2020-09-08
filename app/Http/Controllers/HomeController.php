<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('home',['totalreq'=>$totalreq,
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

