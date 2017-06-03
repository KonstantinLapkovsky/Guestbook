<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
    	return view('messages.create');
    }

    public function store()
    {

        auth()->user()->publish(
            new Message(request(['name', 'email', 'message']))
        );

        //session()->flash('message', 'Your post has now been publish');
    	
    	return redirect('/userpage');
    }
}
