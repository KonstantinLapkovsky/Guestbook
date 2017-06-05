<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class UserRegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store(UserRegistrationForm $form)
    {
    	$form->persist();
    	session()->flash('message', 'Thanks so much for signing up!');
    	return redirect('/userpage');
    }
}
