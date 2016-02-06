<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about() {
		return view('pages.about');
	}
    
    public function contact() {
		return view('pages.contact');
	}

	public function index() {
		$recentmotions = DB::table('motions', [25])
							-> select('Date', 'RoundCode', 'Round', 'Motion', 'Tournament') 
							-> orderby('Date', 'desc') 
							-> orderby('RoundCode', 'asc') 
							-> get();
        return view('pages.index', ['motions' => $recentmotions]);
	}

	public function search() {
		return view('pages.search');
	}

	public function motions2015() {
		$motions2015 = DB::table('motions')
                ->groupBy('Date')
                ->having('Date', '>=', 20150101)
                ->having('Date', '<', 20160101)
                -> orderby('Date', 'desc') 
				-> orderby('RoundCode', 'asc') 
                ->get();
        return view('pages.motions2015', ['motions' => $motions2015]);

	}
}
