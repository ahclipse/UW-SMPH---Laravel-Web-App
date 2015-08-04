<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Warf;


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
    	$buildings = Warf::select('facilityname')
    		->distinct()
    		->lists('facilityname', 'facilityname')->all();

        //  2)  Get only the 'data' fields from the returned query
        //$buildings = array_pluck($buildings, 'facilityname');
        //  3)  Include preceeding entries if needed 
        array_unshift($buildings, "", "All", "Each");

        $owner = Warf::select('ownerdept')
            ->distinct()
            ->lists('ownerdept', 'ownerdept')->all();
        array_unshift($owner, "", "All", "Each");

        $func = Warf::select('roomfunction')
            ->distinct()
            ->lists('roomfunction', 'roomfunction')->all();
        array_unshift($func, "");

        $use = Warf::select('roomuse')
            ->distinct()
            ->lists('roomuse', 'roomuse')->all();
        array_unshift($use, "");
        //----------------------------------------------------------------------------

    	return view('reports.space', compact('buildings', 'owner', 'func', 'use'));
    	//return $buildings;
    }
        

    public function floorplans()
    {
        
        //  Names of all buildings that have viewable floor plans, add any additional
        //      here. 
        $buildings = array(
                "Biochem",
                "CSC - Clinical Science Center",
                "Genetics (Biotech)",
                "HSLC - Health Sciences Learning Center",
                "MCA",
                "MFCB",
                "MSB",
                "MSC",
                "WARF - Wisconsin Alumni Research Foundation",
                "WIMR - Wisconsin Institure of Medical Research",
                "WISPIC"
            );


        return view('floorplans.fp', compact('buildings'));
        //return $buildings;
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
