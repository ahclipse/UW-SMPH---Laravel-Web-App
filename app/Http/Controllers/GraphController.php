<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GraphController extends Controller
{
    public function space()
    {
    	$input = Request::all(); 
    	//json_encode($input);
    	//$query = Warf::select('');

    	//return $input['building'];
    	return view('charts.test', compact('input'));
    }
}
