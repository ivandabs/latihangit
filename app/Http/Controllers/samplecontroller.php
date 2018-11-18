<?php

namespace App\Http\Controllers;

use Crypt;
use Session;
use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

/**
* 
*/
class samplecontroller extends Controller
{
	
	public function index()
	{
		return view('sample/sample');
	}
}