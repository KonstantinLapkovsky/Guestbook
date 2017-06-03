<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\User;

class Message extends Eloquent
{
	protected $fillable = ['name', 'email', 'message'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
