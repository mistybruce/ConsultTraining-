<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Auth;

class PostFormRequest extends Request
{
	public function authorize()
	{
		##$this is the request, brings back a user and then we are checking if the user can post
		##return boolean true if user can post
		if($this->user()->can_post())
		{
			return true;
		}
		return false;
	}

	public function rules()
	{
		##Requires a unique title with a 255 char limit, and requires a body
		return [
			'title' => 'required|unique:posts|max:255',
			'body' => 'required',
		];
	}
}