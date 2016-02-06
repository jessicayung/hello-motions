<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// use App\Http\Controllers\DB;
class PagesController extends Controller
{

    public function about() {
		return view('pages.about');
	}
    
    public function contact() {
		return view('pages.contact');
	}

    public function addmotions() {
		return view('pages.addmotions');
	}	

	public function index() {
		$recentmotions = DB::table('motions', [25])
							-> select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament') 
							-> orderby('Date', 'desc') 
							-> orderby('Round_Code', 'asc') 
							-> get();
        return view('pages.index');
	}

	public function search() {
		return view('pages.search');
	}

	public function motions2015() {
		$motions2015 = DB::table('motions')
				-> select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament') 
                ->groupBy('Date')
                ->having('Date', '>=', 20150101)
                ->having('Date', '<', 20160101)
                -> orderby('Date', 'desc') 
				-> orderby('Round_Code', 'asc') 
                ->get();
        return view('pages.motions2015', ['motions' => $motions2015]);

	}
}
