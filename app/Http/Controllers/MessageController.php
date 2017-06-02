<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

    /*public function index()
    {
        return view('messages.create');
    }*/


    public function generateCaptcha()
    {
    	$code = '';
		$chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
		$max = rand(4,7);
		$size = strlen($chars) - 1;
		// Generate random code.
		while ($max--) {
			$code .= $chars[rand(0, $size)];
		}
		return $code;
    }

    public function create()
    {
    	$captcha = $this->generateCaptcha();
    	return view('messages.create', compact('captcha'));
    }

    public function store()
    {
    	/*$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required|min:20', 
    		'captcha' => 'required|confirmed'
    	]);*/

        auth()->user()->publish(
            new Message(request(['name', 'email', 'message']))
        );

        session()->flash('message', 'Your post has now been publish');
    	
    	return redirect('/userpage');
    }
}
