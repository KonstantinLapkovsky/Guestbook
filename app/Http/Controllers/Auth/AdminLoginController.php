<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin')->except('logout');
		$this->middleware('auth:admin')->only('logout');
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email', 
    		'password' => 'required|min:6'
   		]);
    	if (! auth()->guard('admin')->attempt(request(['email', 'password']), $request->remember)) {
    		return redirect()->back()->withInput($request->only(['email', 'remember']));
    	};
    	
    	return redirect()->intended('/admin/messages');

    }

    public function logout()
    {
    	if (auth()->guard('admin')->check()) {
    		auth()->logout();
    	};
    	return redirect('/admin');
    }

}
