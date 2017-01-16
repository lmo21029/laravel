@extends('layouts.base')
@section('title','Inicio Administrador')

@section('content')

	<div class="text-letf" style="margin-top: 20px; margin-bottom: 20px;">
		<a href="{{ route("accounts.create") }}" class="btn btn-primary">New AppUsers</a>
	</div>

<h2>AppUsers</h2>
		<br />
		<table class="table table-bordered datatable" id="table-1" style="max-width: 1355px; margin-left: 20px;">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Devices Limit</th>
					<th>Email</th>
					<th>enable</th>
					<th>Acciones</th>
				</tr>
			</thead>


			<tbody>
				@foreach($appusers as $item)
					<tr>
						<td>{{$item->id}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->devices_limit}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->enable}}</td>
						<td>
							<div>
								<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#{{ $item->id }}-modal"> Ver mi orden</button> 
							</div>

							<div>
								<a href="{{route('accounts.edit',["id"=>$item->id])}}" class="btn btn-primary btn-xs">Modificar</a>
							</div>

							<div>
								{{Form::open(['method'=>'DELETE','route'=>['accounts.destroy',$item->id]])}}
								{{Form::submit('Eliminar',array('class'=>'btn btn-danger btn-xs'))}}
								{{Form::close()}}
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Devices Limit</th>
					<th>Email</th>
					<th>enable</th>
					<th>Acciones</th>
				</tr>
			</tfoot>
		</table>



		@foreach($appusers as $item)

<div class="modal fade" id="{{ $item->id }}-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="form-group text-center" id="myModalLabel">Detalles de Orden</h4>
		</div>
				<div class="modal-body">
						
						<div class="form-group">
							<label for="disabledTextInput">Direccion de factura:</label>
							<textarea type="textarea" id="disabledTextInput" class="form-control"  value="">{{$item->name}}</textarea>
						</div>


						<div class="form-group">
							<label for="disabledTextInput">Nombre a quien va la factura</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$item->devices_limit}} ">
						</div>


						<div class="form-group">
							<label for="disabledTextInput">Nombre a quien va el envio</label>
							<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$item->email}} ">
						</div>

						<div class="form-group">
							<label for="disabledTextInput">Nota del envio</label>
							<textarea type="textarea" id="disabledTextInput" class="form-control"  value="">{{$item->notes}}</textarea>
						</div>

						<div class="form-group">
							<label for="disabledTextInput">Codigo ZIP de envio</label>
							<input type="textarea" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$item->enable}}">
						</div>

	
				<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach



		
		<br />

@stop