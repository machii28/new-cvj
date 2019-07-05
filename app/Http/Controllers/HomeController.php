<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\inventory;
use App\categoryRef;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Carbon\Carbon;
use Faker\Generator as Faker;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = DB::table('event')->get();
        $venue = DB::table('reserve_venue')->get();

        $joinedTable = DB::table('event')
        ->select('*')
        ->join('reserve_venue','reserve_venue.reservation_id','=','event.reservation_id')
        ->get();

        return view('inventoryDashboard', ['events' => $joinedTable]);
        
    }
}
