
@extends('backend.layouts.base')
@section('title','Productos | Crear')

@section('content')

<h1 class="text-center">Edita tu perfil</h1>

  {{ Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'post', 'class'=>'form-horizontal row-border', 'novalidate' => 'novalidate']) }}



 <div class="panel-body">

              <div class="form-group">
              <label class="col-sm-5 control-label">Email:  </label>
                <div class="col-sm-3">
                  {{ Form::email('email',null,array('class'=>'form-control','maxlength' => '75')) }}
                </div>
                <span class="errors">{{ $errors->first('email') }}</span>
              </div>


                  <div class="form-group">
                   <label class="col-sm-5 control-label">Nombre:  </label>
                    <div class="col-sm-3">
                      {{ Form::text('name',null,array('class'=>'form-control','maxlength' => '75')) }}
                      <span class="errors">{{ $errors->first('name') }}</span>
                    </div>
                  </div>
              

                <div class="form-group">
                  <label class="col-sm-5 control-label">Apellido:  </label>
                  <div class="col-sm-3">
                    {{ Form::text('lastname',null,array('class'=>'form-control','maxlength' => '75')) }}
                    <span class="errors">{{ $errors->first('lastname') }}</span>
                  </div>
                </div>

 
            <div class="form-group">
               <label class="col-sm-5 control-label">Teléfono:  </label>
              <div class="col-sm-3">
                {{ Form::text('phone',null,array('class'=>'form-control','placeholder' => 'Ejemplo:04140000000','maxlength' => '11')) }}
                <span class="errors">{{ $errors->first('phone') }}</span>
              </div>
            </div>
          

            <div class="form-group">
              <label class="col-sm-5 control-label">Teléfono alternativo:  </label>
              <div class="col-sm-3">
                {{ Form::text('phone_alt',null,array('class'=>'form-control','placeholder' => 'Ejemplo:04140000000','maxlength' => '11')) }}
                <span class="errors">{{ $errors->first('phone_alt') }}</span>
              </div>
            </div>
            

                
            <div class="form-group">
             <label class="col-sm-5 control-label">Dirección:  </label>
              <div class="col-sm-3">
                {{ Form::text('address',null,array('class'=>'form-control','maxlength' => '100')) }}
                <span class="errors">{{ $errors->first('address') }}</span>
              </div>
            </div>



                
            <div class="form-group">
               <label class="col-sm-5 control-label">Cédula:  </label>
              <div class="col-sm-3">
                {{ Form::text('cedula',null,array('class'=>'form-control','maxlength' => '75','placeholder'=>'Introduzca su número de cédula, no utilice RIF.',)) }}
                <span class="errors">{{ $errors->first('cedula') }}</span>
              </div>
            </div>

         
                
              <div class="form-group">
                <label class="col-sm-5 control-label">Contraseña:  </label>
                <div class="col-sm-3">
                  {{ Form::password('password',array('class'=>'form-control','maxlength' => '16')) }}
                  <span class="errors">{{ $errors->first('password') }}</span>
                </div>
              </div>
              




      <div class="form-group text-right">
            <div class="col-sm-5 col-sm-offset-1">
      <a href="{{ route("panel.index") }}" class="btn btn-primary">Regresar</a>
<button type="submit" class="btn btn-success">Guardar</button>
            </div>
      </div>
</div>
        
  {{ Form::close() }}
      

@stop