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

		$queries = preg_split('/\s*,\s*/', trim($queries));

		$international = Request::input('intl');
		
		if ($international == 3) {

		} else if ($international == 2) {

		} else if ($international == 1) {

		} else {
			$international = 0;
		}

		$motions = [];

		foreach ($queries as $query){

			$motionquery = DB::table('motions')
				-> having('International', '>=', $international)
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
				-> orwhere('Topic_Area_3', 'LIKE', '%' .$query.'%')
				// -> groupby('Motion')
				-> orderby('Date', 'desc')
				-> orderby('Tournament', 'asc')
				-> orderby('Round_Code', 'asc')
				-> get();

		$motions = array_merge($motionquery, $motions);
		
		}

		return view('pages.search')->with('motions', $motions);
	}

	public function motions2013andearlier() {
		
		$motions2013andearlier = DB::table('motions')
				->having('Date','<',20140101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions-2013-and-earlier')->with('motions2013andearlier', $motions2013andearlier);

	}

	public function motions2013andearliermobile() {
		
		$motions2013andearlier = DB::table('motions')
				->having('Date','<',20140101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions-2013-and-earlier-mobile')->with('motions2013andearlier', $motions2013andearlier);

	}

	public function motions2014() {
		
		$motions2014 = DB::table('motions')
				->having('Date','>=',20140101)
				->having('Date','<',20150101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2014')->with('motions2014', $motions2014);

	}

	public function motions2014mobile() {
		
		$motions2014 = DB::table('motions')
				->having('Date','>=',20140101)
				->having('Date','<',20150101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2014-mobile')->with('motions2014', $motions2014);

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

	public function motions2017() {
			
		$motions2017 = DB::table('motions')
				->having('Date','>=',20170101)
				->having('Date','<',20180101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2017')->with('motions2017', $motions2017);

	}

	public function motions2017mobile() {
		
		$motions2017 = DB::table('motions')
				->having('Date','>=',20170101)
				->having('Date','<',20180101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2017-mobile')->with('motions2017', $motions2017);

	}

	public function motions2018() {
			
		$motions2018 = DB::table('motions')
				->having('Date','>=',20180101)
				->having('Date','<',20190101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2018')->with('motions2018', $motions2018);

	}

	public function motions2018mobile() {
		
		$motions2018 = DB::table('motions')
				->having('Date','>=',20180101)
				->having('Date','<',20190101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2018-mobile')->with('motions2018', $motions2018);

	}

	public function motions2019() {
			
		$motions2019 = DB::table('motions')
				->having('Date','>=',20190101)
				->having('Date','<',20200101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2019')->with('motions2019', $motions2019);

	}

	public function motions2019mobile() {
		
		$motions2019 = DB::table('motions')
				->having('Date','>=',20190101)
				->having('Date','<',20200101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2019-mobile')->with('motions2019', $motions2019);

	}

	public function motions2020() {
			
		$motions2020 = DB::table('motions')
				->having('Date','>=',20200101)
				->having('Date','<',20210101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2020')->with('motions2020', $motions2020);

	}

	public function motions2020mobile() {
		
		$motions2020 = DB::table('motions')
				->having('Date','>=',20200101)
				->having('Date','<',20210101)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2020-mobile')->with('motions2020', $motions2020);

	}

	public function randommotion() {
		
		$total = DB::table('motions')->count();
		$randomindex = rand(1,$total - 1);
		$randommotion = DB::table('motions')
					->skip($randomindex)
					->take(1)
					->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament', 'Infoslide')
					->get();

        return view('pages.random-motion')->with('randommotions', $randommotion);

	}

	public function tenrandommotions() {
		
		$total = DB::table('motions')->count();
		$tenrandommotions = array();
		for ($i = 0; $i < 10; $i++) {
			$randomindex = rand(1,$total-1);

			$randommotion = DB::table('motions')
					->skip($randomindex)
					->take(1)
					->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament', 'Infoslide')
					->get();

			$tenrandommotions = array_merge($tenrandommotions, $randommotion);

		};

        return view('pages.ten-random-motions')->with('tenrandommotions', $tenrandommotions);

	}

	public function internationalmotions() {
		
		$motions2016 = DB::table('motions')
				->having('International', '>=', 1)
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Tournament', 'asc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.motions2016-mobile')->with('motions2016', $motions2016);

	}

	public function wudcmotions() {

		$wudc2020motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2020')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2019motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2019')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2018motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2018')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2017motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2017')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2016motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2016')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

        $wudc2015motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2015')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2014motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2014')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2013motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2013')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2012motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2012')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2011motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2011')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2010motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2010')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2009motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2009')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2008motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2008')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudc2007motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%WUDC 2007')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$wudcmotions = array(
			'wudc2020motions' => $wudc2020motions,
			'wudc2019motions' => $wudc2019motions,
			'wudc2018motions' => $wudc2018motions,
			'wudc2017motions' => $wudc2017motions,
			'wudc2016motions' => $wudc2016motions,
			'wudc2015motions' => $wudc2015motions,
			'wudc2014motions' => $wudc2014motions,
			'wudc2013motions' => $wudc2013motions,
			'wudc2012motions' => $wudc2012motions,
			'wudc2011motions' => $wudc2011motions,
			'wudc2010motions' => $wudc2010motions,
			'wudc2009motions' => $wudc2009motions,
			'wudc2008motions' => $wudc2008motions,
			'wudc2007motions' => $wudc2007motions,
			);

		// return view('pages.wudc-motions')->with('wudc2016motions', $wudc2016motions);

        return view('pages.wudc-motions')->with($wudcmotions);

	}

	public function eudcmotions() {

		$eudc2019motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2019')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2018motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2018')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2017motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2017')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2016motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2016')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

        $eudc2015motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2015')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2014motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2014')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2013motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2013')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2012motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2012')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();
		/*
		$eudc2011motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2011')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2010motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2010')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2009motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2009')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2008motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2008')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();

		$eudc2007motions = DB::table('motions')
				->where('Tournament', 'LIKE', '%eudc 2007')
				->select('Round_Code', 'Round', 'Motion', 'Infoslide')
				->orderby('Round_Code', 'asc')
				->get();
		*/
		$eudcmotions = array(
			'eudc2019motions' => $eudc2019motions,
			'eudc2018motions' => $eudc2018motions,
			'eudc2017motions' => $eudc2017motions,
			'eudc2016motions' => $eudc2016motions,
			'eudc2015motions' => $eudc2015motions,
			'eudc2014motions' => $eudc2014motions,
			'eudc2013motions' => $eudc2013motions,
			'eudc2012motions' => $eudc2012motions,
			/*
			'eudc2011motions' => $eudc2011motions,
			'eudc2010motions' => $eudc2010motions,
			'eudc2009motions' => $eudc2009motions,
			'eudc2008motions' => $eudc2008motions,
			'eudc2007motions' => $eudc2007motions,
			*/
			);

		// return view('pages.eudc-motions')->with('eudc2016motions', $eudc2016motions);

        return view('pages.eudc-motions')->with($eudcmotions);

	}
	/*
	public function eudcmotions() {

		$eudcmotions = DB::table('motions')
				->having('Tournament', 'LIKE', "EUDC")
				->select('Date', 'Round_Code', 'Round', 'Motion', 'Tournament')
				->orderby('Date', 'desc')
				->orderby('Round_Code', 'asc')
				->get();
        return view('pages.eudcmotions')->with('eudcmotions', $eudcmotions);
    }
    */

}
