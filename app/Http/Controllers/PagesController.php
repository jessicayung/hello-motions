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
        return view('pages.index')->with('recentmotions', $recentmotions);
	}

	public function search($term) {

		$motions = DB::table('motions')
							-> where('Motion', 'LIKE', $term)
							-> orwhere('Circuit', 'LIKE', $term)
							-> orwhere('Country', 'LIKE', $term)
							-> orwhere('Tournament', 'LIKE', $term)
							-> orwhere('CA_1', 'LIKE', $term)
							-> orwhere('CA_2', 'LIKE', $term)
							-> orwhere('CA_3', 'LIKE', $term)
							-> orwhere('CA_4', 'LIKE', $term)
							-> orwhere('CA_5', 'LIKE', $term)
							-> orwhere('CA_6', 'LIKE', $term)
							-> orwhere('CA_7', 'LIKE', $term)
							-> orwhere('Round_Code', 'LIKE', $term)
							-> orwhere('Round', 'LIKE', $term)
							-> orwhere('Infoslide', 'LIKE', $term)
							-> orwhere('Topic_Area_1', 'LIKE', $term)
							-> orwhere('Topic_Area_2', 'LIKE', $term)
							-> get();

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
