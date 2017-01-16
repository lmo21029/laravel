<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="../../public/js/ajax.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title>Register | Users</title>

<style type="text/css">
  body
{
    background: url('http://farm3.staticflickr.com/2832/12303719364_c25cecdc28_b.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
}




form.login input[type="submit"]:hover
{
    transition: background-color 0.5s ease;
}

form.login .remember-forgot
{
    float: left;
    width: 100%;
    margin: 10px 0 0 0;
}
form.login .forgot-pass-content
{
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
}
form.login label, form.login a
{
    font-size: 12px;
    font-weight: 400;
    color: #FFFFFF;
}

form.login a
{
    transition: color 0.5s ease;
}

form.login a:hover
{
    color: #2ecc71;
}


</style>

</head>
<body >


      {{ Form::open(array('route' => array('users.store', Config::get('app.locale')),'id' => 'form_register','method'=>'post')) }}

      
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
          <div class="panel-title">Register Users</div>
        </div>     



        <div style="padding-top:30px" class="panel-body" >

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <form id="loginform" class="form-horizontal" role="form">


       <div style="margin-bottom: 25px" class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text("name",null,array("class"=>"form-control","placeholder" => "User Name")) }}
       {{$errors->first('name','<p class="errors">:message</p>')}}
         </div>

                <div style="margin-bottom: 25px" class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            {{ Form::text("lastname",null,array("class"=>"form-control","placeholder" => "User lastname")) }}
           {{$errors->first('lastname','<p class="errors">:message</p>')}}
             </div>
            


             <div style="margin-bottom: 25px" class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::text("email",null,array("class"=>"form-control","placeholder" => "Email")) }}
                {{$errors->first('email','<p class="errors">:message</p>')}}
              </div>



               <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                {{ Form::password("password",null,array("class"=>"form-control","placeholder" => "Password")) }}
                {{$errors->first('password','<p class="errors">:message</p>')}}
              </div>

            <div class="form-group">
              <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" > 
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block btn-login"> <i class="entypo-right-open-mini"></i> Sign Up </button>
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

</body>
</html>