<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home()
    {
	    return view('home')->with([
            'foo' => 'Caterie Yo',
            'tasks' => ['task 1', 'task2', 'task3']
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
