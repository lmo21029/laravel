@extends('layouts.base')
@section('title','Inicio Administrador')

@section('content')
			<div class="col-sm-12">
				<div class="row">
					<a href="">
					<div class="col-sm-3 col-xs-6">
					<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="{{App\User::all()->count()}}" data-postfix="" data-duration="1500" data-delay="0"></div>

					<h3>Ordenes</h3>
					</a>
					<p>Ver ordenes</p>
				</div>
			</div>
@stop