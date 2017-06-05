<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
	public function __construct(Message $messages)
	{
		$this->middleware('auth:admin')->only('index');
        $this->middleware('auth');
	}

    public function index(Request $request)
    {
        $order = $request->get('order') ? $request->get('order') : 'created_at';
        $dir = $request->get('dir') ? $request->get('dir') : 'asc';
        $messages = Message::orderBy($order, $dir)->paginate(10);
        if ($request->ajax()) {
            return response()->json(view('messages.messages', compact('messages'))->render());
        };
        return view('messages.index', compact('messages'));
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
    	return redirect('/userpage');
    }
}
