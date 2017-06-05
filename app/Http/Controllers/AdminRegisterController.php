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
    	return redirect('/admin/messages');
    }
}
