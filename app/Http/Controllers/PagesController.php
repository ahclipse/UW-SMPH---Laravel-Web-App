<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

/*
	PagesController handles all requests related to page navigation requests
*/

class PagesController extends Controller
{
    /*
        space() makes call to the database to retrieve information needed to 
            populate and display the space page.
    */
    public function space()
    {

        //  The following steps 1-3 are repeated for each form entry on the page
        //----------------------------------------------------------------------------
        //  1)  Select all unique buildings existing in the database
    	$facility = DB::table('smowarf')
    		->select('facilityname')
    		->distinct()
    		->get();
        //  2)  Get only the 'data' fields from the returned query
        $buildings = array_pluck($facility, 'facilityname');
        //  3)  Include preceeding entries if needed 
        array_unshift($buildings, "", "All", "Each");

        $ownerdept = DB::select('select DISTINCT ownerdept from smowarf');
        $owner = array_pluck($ownerdept, 'ownerdept');
        array_unshift($owner, "", "All", "Each");

    	$roomfunction = DB::select('select DISTINCT roomfunction from smowarf');
        $func = array_pluck($roomfunction, 'roomfunction');
        array_unshift($func, "");

        $roomuse = DB::select('select DISTINCT roomuse from smowarf');
        $use = array_pluck($roomuse, 'roomuse');
        array_unshift($use, "");
        //----------------------------------------------------------------------------

    	return view('reports.space', compact('buildings', 'owner', 'func', 'use'));
    	//return $facility;
    }

    /*
        financial() makes call to the database to retrieve information needed to 
            populate and display the financial page.
    */
    public function financial()
    {
        return view('reports.financial');
    }

    /*
        occupancy() makes call to the database to retrieve information needed to 
            populate and display the occupancy page.
    */
    public function occupancy()
    {
        return view('reports.occupancy');
    }
}
