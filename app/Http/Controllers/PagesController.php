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
                array("Biochem"),
                array("CSC - Clinical Science Center"),
                array("Genetics (Biotech)"),
                array("HSLC - Health Sciences Learning Center",
                            "HSLC 02 11x17.pdf",
                            "HSLC 03 11x17.pdf",
                            "HSLC 04 11x17.pdf"),
                array("MCA"),
                array("MFCB"),
                array("MSB"),
                array("MSC"),
                array("WARF - Wisconsin Alumni Research Foundation",
                            "WARF 02 11x17.pdf",
                            "WARF 03 11x17.pdf",
                            "WARF 04 11x17.pdf",
                            "WARF 05 11x17.pdf",
                            "WARF 06 11x17.pdf",
                            "WARF 07 11x17.pdf",
                            "WARF 08 11x17.pdf",
                            "WARF 09 11x17.pdf",
                            "WARF 10 11x17.pdf",
                            "WARF 11 11x17.pdf",
                            "WARF 12 11x17.pdf",
                            "WARF 13 11x17.pdf",
                            "WARF 14 11x17.pdf"),
                array("WIMR - Wisconsin Institure of Medical Research"),
                array("WISPIC")
            );
      

        return view('floorplans.fp', compact('buildings'));
        //return sizeof($buildings[8]);
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
