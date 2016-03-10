<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

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
        return view('pages.index')->with('recentmotions', $recentmotions);
	}

	public function search(Request $request) {

		$query = Request::input('q');

			$motions = DB::table('motions')
				->where('Motion','LIKE','%' .$query.'%')
				->get();

		return view('pages.search')->with('motions', $motions);
	}

	public function motions2015() {
		

		$motions2015 = DB::table('motions')
				->having('Date','>=',20120151201)
				->having('Date','<',20160101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2015')->with('motions2015', $motions2015);

	}
}
