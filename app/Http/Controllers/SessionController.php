<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Input;
use Auth;
use Validator;
use Redirect;
use Hash;
use App\User;

class SessionController extends Controller
{
    	public function create()
	{
		return View::make("session.create");
	}


		public function store()
	{
		if ( Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password')) ) )
		{
			return Redirect::route('panel.index');
		}
		return Redirect::back()->withInput()->with('alert-danger', 'Su correo/contraseña son incorrectos.');

	}

		public function destroy()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}
