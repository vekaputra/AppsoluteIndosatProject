<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data = [
    		'date' => Carbon::now()->format("d F Y, h:i A"),
		    'event' => Event::first()->toArray(),
		    'user' => Auth::user()->toArray()
	    ];

        return view('web.home', $data);
    }
}
