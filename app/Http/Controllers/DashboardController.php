<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function main()
    {
    	return view('dashboard');
    }

    public function offers()
    {
    	return view('offers');
    }

    public function customers()
    {
    	return view('customers');
    }
}
