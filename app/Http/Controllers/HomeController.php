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
        
        $drpt = Dailyeport::count();
        $medics = Medication::count();
        $reqs = Requisition::count();
        return view('home',[
                                    'drpt' => $drpt,
                                    'medics' => $medics,
                                    'reqs' => $reqs,]);
    }
}

