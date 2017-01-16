@extends('layouts.base')
@section('title','Inicio Administrador')
@section('content')


      {{ Form::open(array('route' => array('panel.guardar2', Config::get('app.locale')),'id' => 'form_register','method'=>'post')) }}

      
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
 

  <div class="container">    
    <div id="loginbox" style="margin-top:250px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Registro de usuarios</div>
        </div>     



        <div style="padding-top:30px" class="panel-body" >

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <form id="loginform" class="form-horizontal" role="form">


       <div style="margin-bottom: 25px" class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text("name",null,array("class"=>"form-control","placeholder" => "Nombre de usuario")) }}
       {{$errors->first('name','<p class="errors">:message</p>')}}
         </div>

                <div style="margin-bottom: 25px" class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text("lastname",null,array("class"=>"form-control","placeholder" => "Apellido de usuario")) }}
       {{$errors->first('lastname','<p class="errors">:message</p>')}}
         </div>
            


             <div style="margin-bottom: 25px" class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                
                {{ Form::text("email",null,array("class"=>"form-control","placeholder" => "Correo Electronico")) }}
             
                {{$errors->first('email','<p class="errors">:message</p>')}}
              </div>



               <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                {{ Form::password("password",null,array("class"=>"form-control","placeholder" => "Constraseña")) }}
                {{$errors->first('password','<p class="errors">:message</p>')}}
              </div>

            <div class="form-group">
              <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" > 
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block btn-login"> <i class="entypo-right-open-mini"></i> Completar Registro </button>
                  </div>

          {{ Form::close() }}

     

     <script type="text/javascript">
        $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});
     </script>


     
 
@stop