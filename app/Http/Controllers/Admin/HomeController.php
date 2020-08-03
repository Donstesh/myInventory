<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use App\Dailyeport;
use App\Medication;
use App\Shares;
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
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $employees = User::count();
        $admins = Admin::count();
        $drpt = Dailyeport::count();
        $medics = Medication::count();
        $shares = Shares::count();
        return view('admin.home', ['employees' => $employees,
                                    'admins' => $admins,
                                    'drpt' => $drpt,
                                    'medics' => $medics,
                                    'shares' => $shares,]);
        
    }
}

