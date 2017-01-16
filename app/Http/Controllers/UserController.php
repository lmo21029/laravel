<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Input;
use Validator;
use Redirect;
use Hash;
use App\User;
use Auth;

class UserController extends Controller
{
    
    	public function create()
	{		
		if (Auth::guest()){
			return View::make('users.create');
			}
	}



	 public function index() {

    		$users= User::all()->toArray();

			return response()->json($users);

    }



		public function store()
	{
			$input = Input::all();

			 $validator = Validator::make($input,User::rules());
		
			if ( $validator->fails() ) {
				return Redirect::back()->withErrors($validator)->with("alert-danger","Verifica el formulario");
			}

			$user = new User;
			$user->name = e(Input::get('name'));
			$user->lastname = e(Input::get('lastname'));
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return View::make('session.create');

	}



	public function guardar2(){
	
			$input = Input::all();
			$validator = Validator::make($input,User::rules());

			if ( $validator->fails() ) {
				return Redirect::back()->withErrors($validator)->with("alert-danger","Verifica el formulario");
			}

			$user = new User;
			$user->name = e(Input::get('name'));
			$user->lastname = e(Input::get('lastname'));
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::route('panel.index')->with("alert-success","REGISTRO ");
	
	}




		public function edit($id)
	{
		$user = User::find(Auth::user()->id);
		return View::make('panel.users.update')->with('user',$user)->with('section','Actualizar Cuenta');
	}



	public function update($id)
	{
		$validation = Validator::make(Input::all(), User::rules_alt(Auth::user()->id));

		if ( $validation->fails() ) {
			return Redirect::back()->withErrors($validation)->withInput()->with('alert-danger','Verifica los datos ingresados');
		}

		$user = User::find(Auth::user()->id);
		$user->password = Hash::make(Input::get('password'));
		$user->active = 1;

		$user->save();

		return Redirect::route('panel.users.settings')->with('alert-success','Su password fue actualizado.');
	}

	public function ajaxShow(Illuminate\Http\Request $request){

        if ($request->isMethod('post')){    
            return response()->json(['response' => 'This is post method']); 
        }

        return response()->json(['response' => 'This is get method']);
	}
	

}
