<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PanelController extends Controller
{
    

	public function index()
	{
		return View::make("index");
	}

}
