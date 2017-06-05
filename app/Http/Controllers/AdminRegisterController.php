<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRegistrationForm;

class AdminRegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

    public function create()
    {
    	return view('auth.admin-login');
    }

    public function store(AdminRegistrationForm $form)
    {
    	$form->persist();
    	session()->flash('message', 'Thanks so much for signing up!');
    	return redirect('/admin/messages');
    }
}
