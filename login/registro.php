<?php

/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/


session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registro de usuarios</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/script2.js"></script>

</head>

<body>
    
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Completar</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        <div class="form-group">
        <input type="number" class="form-control" placeholder="Documento de identidad" name="id" id="id" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Primer Nombre" name="name" id="name" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Segundo Nombre" name="name2" id="name2" />

        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
            <input type='date' class="form-control" placeholder="Fecha de nacimiento" name="f_n" id='datetimepicker4' />

        </div>
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Correo electronico" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" />
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Repetir Contraseña" name="password2" id="password2" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            <span class="glyphicon glyphicon-user"></span> &nbsp; Completado
            </button> 
            
        </div> 
      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>