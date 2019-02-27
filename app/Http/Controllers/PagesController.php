<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home()
    {
	    return view('home', [
	    	'foo' => 'Caterie Yo'
	    	'tasks' => ['work at home', 'work at school', 'work anywhere']
	    ]);

    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }
}
