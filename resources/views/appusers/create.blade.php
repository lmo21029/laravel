@extends('layouts.base')
@section('title','Inicio Administrador')

@section('content')

  @if($action == "create")
  {{ Form::open(array("route" => "accounts.store","enctype"=>"multipart/form-data", "class"=>"form-horizontal",'id'=>'formSel')) }}
  @else
  {{ Form::model($appusers, array('method'=>'PUT', "class"=>"form-horizontal",'id'=>'formSel',"enctype"=>"multipart/form-data",'route' => array('accounts.update', $appusers->id))) }}
  @endif


      
  @if (Session::has('alert-success'))
        <div class="form-register-success">
          <p>{{ Session::get('alert-success') }}</p>
        </div>
        @endif

        @if (Session::has('alert-danger'))
        <div class="form-login-error">
          <p>{{ Session::get('alert-danger') }}</p>
        </div>
        @endif

      <h2>AppUsers</h2>
        <br />
          <div class="panel-body">
            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-5">
                {{ Form::text("name",null,array("class"=>"form-control", "placeholder" => "Name")) }}
              </div>
              {{$errors->first('name','<p  class="errors">:message</p>')}}
            </div>

            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Devices Limit</label>
              <div class="col-sm-5">
                {{ Form::text("devices_limit",null,array("class"=>"form-control", "placeholder" => "Devices Limit")) }}
              </div>
              {{$errors->first('devices_limit','<p  class="errors">:message</p>')}}
            </div>

            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-5">
                {{ Form::text("email",null,array("class"=>"form-control", "placeholder" => "Email")) }}
              </div>
              {{$errors->first('email','<p  class="errors">:message</p>')}}
            </div>

            <div class="form-group">
              <label for="field-1" class="col-sm-3 control-label">Enable</label>
              <div class="col-sm-5">
                {{ Form::select('enable', [
                   '1' => 'YES',
                   '0' => 'NOT',],array('class' => 'form-group')) }}
              </div>
              {{$errors->first('enable','<p  class="errors">:message</p>')}}
            </div>


            


      <div class="form-group text-right">
        <div class="col-sm-5 col-sm-offset-1">
          <a href="{{ route("accounts.index") }}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </div>
{{ Form::close() }}


@stop