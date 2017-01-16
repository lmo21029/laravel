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
use App\Appusers;
use App\Devices;

class AppusersController extends Controller
{

	public function index()
	{ 
		

		$appusers = Appusers::orderBy('id','DESC')->get();
			
		return View::make('appusers.index')->with('appusers',$appusers);

	}


	
	public function create()
	{

	return View::make("appusers.create")->with("action","create");

	}



	public function store()
	{	

		$input = Input::all();
		 $validator = Validator::make($input,Appusers::rules());
	
		if ( $validator->fails() ) {
	return Redirect::back()->withErrors($validator)->with("alert-danger","Verifica el formulario");
		}

		$appusers = new Appusers;
		$appusers->name = Input::get('name');
		$appusers->devices_limit = Input::get('devices_limit');
		$appusers->email = Input::get('email');
		$appusers->enable = Input::get('enable');

		$appusers->save();


		return Redirect::route("accounts.index")->with("alert-success","Success.");
	}



	public function show()
	{
	
	}


	public function edit($id)
	{
		$appusers = Appusers::find($id);

		return View::make("appusers.create")->with("action","edit")->with("appusers",$appusers);

	}



	public function update($id)
	{
			$appusers = Appusers::find($id);
			
			$input = Input::all();
		 $validator = Validator::make($input,Appusers::rules());
	
		if ( $validator->fails() ) {
		return Redirect::back()->withErrors($validator)->with("alert-danger","Verifica el formulario");
		}

		$appusers->name = Input::get('name');
		$appusers->devices_limit = Input::get('devices_limit');
		$appusers->email = Input::get('email');
		$appusers->enable = Input::get('enable');

		$appusers->save();

	return Redirect::route("accounts.index")->with("alert-success","Su Descuento fue Actualizado.");	
	}



	public function destroy($id)
	{
		$appusers = Appusers::find($id);

		$appusers->delete();

		return Redirect::route("panel.index")->with("alert-danger","La orden ha sido eliminada");
	}


}
