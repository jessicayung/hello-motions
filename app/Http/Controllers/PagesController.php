<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
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

    public function missingmotions() {
		return view('pages.missingmotions');
	}	

	public function index() {
		$recentmotions = DB::table('motions')
							-> take(25)
							-> select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament') 
							-> orderby('Date', 'desc') 
							-> orderby('Tournament', 'asc')
							-> orderby('Round_Code', 'asc') 
							-> get();
        return view('pages.index')->with('recentmotions', $recentmotions);
	}

	public function search(Request $request) {

		$queries = Request::input('q');

		$queries = explode(',', $queries);

		foreach ($queries as $query){

			$motionquery = DB::table('motions')
				-> where('Motion','LIKE','%' .$query.'%')
				-> orwhere('Circuit', 'LIKE', '%' .$query.'%')
				-> orwhere('Country', 'LIKE','%' .$query.'%')
				-> orwhere('Tournament', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_1', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_2', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_3', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_4', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_5', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_6', 'LIKE', '%' .$query.'%')
				-> orwhere('CA_7', 'LIKE', '%' .$query.'%')
				-> orwhere('Round_Code', 'LIKE', '%' .$query.'%')
				-> orwhere('Round', 'LIKE', '%' .$query.'%')
				-> orwhere('Infoslide', 'LIKE', '%' .$query.'%')
				-> orwhere('Topic_Area_1', 'LIKE', '%' .$query.'%')
				-> orwhere('Topic_Area_2', 'LIKE', '%' .$query.'%')
				-> orderby('Date', 'desc')
				-> orderby('Tournament', 'asc')
				-> orderby('Round_Code', 'asc')
				-> get();

		$motions = array_merge($motionquery, $motions);
		
		}

		return view('pages.search')->with('motions', $motions);
	}

	public function motions2015() {
		
		$motions2015 = DB::table('motions')
				->having('Date','>=',20150101)
				->having('Date','<',20160101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2015')->with('motions2015', $motions2015);

	}

	public function motions2015mobile() {
		
		$motions2015 = DB::table('motions')
				->having('Date','>=',20150101)
				->having('Date','<',20160101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2015-mobile')->with('motions2015', $motions2015);

	}

	public function motions2016() {
			
		$motions2016 = DB::table('motions')
				->having('Date','>=',20160101)
				->having('Date','<',20170101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2016')->with('motions2016', $motions2016);

	}

	public function motions2016mobile() {
		
		$motions2016 = DB::table('motions')
				->having('Date','>=',20160101)
				->having('Date','<',20170101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2016-mobile')->with('motions2016', $motions2016);

	}

}
