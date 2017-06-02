<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

    public function index()
    {
        return view('messages.create');
    }

    public function create()
    {
    	return view('messages.create');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    	]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash('message', 'Your post has now been publish');
    	
    	return redirect('/userpage');
    }
}
