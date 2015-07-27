<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*
	PagesController handles all requests related to page navigation requests
*/

class PagesController extends Controller
{
    public function reports()
    {
    	return view('reports');
    }
}
