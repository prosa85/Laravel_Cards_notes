<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
	public function home() {
    $people = ['Pablo', 'David', 'Steph', 'Sophia'];
    return view('welcome', compact('people'));


	}
	public function about() {
		return view('about');
	}

}
