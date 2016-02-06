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
		$recentmotions = DB::table('motions')
							-> take(25)
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
		

		$motions2015 = App\Motion::where('date','>=',20120151201)
				->having('Date','<',20160101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2015', ['motions' => $motions2015]);

	}
}
