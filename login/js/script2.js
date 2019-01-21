/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			name: {
			required: true,
			},
			name2: {
			required: true,
			},
			apellidos: {
			required: true,
			},
			password: {
			required: true,
			},
			password2: {
			required: true,
			},

            password2: {
            equalTo: password
            },
            id: {
            required: true,
            },
			f_n: {
			required: true,
			date:true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "por favor ingresa tu contraseña"
                     },
            password2:{
                      required: "las contraseñas deben coincidir"
                     },
            name:{
                      required: "por favor ingresa tu primer nombre"
                     },
            name2:{
                      required: "por favor ingresa tu segundo nombre"
                     },
            apellidos:{
                      required: "por favor ingresa tus apellidos"
                     },
            f_n:{
                      required: "por favor ingresa tus fecha de nacimiento"
                     },
            f_n:{
                      required: "por favor ingresa tu documento de identidad"
                     },
            user_email: "por favor ingresa tu correo",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'regis_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; enviando ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="../imagenes/btn-ajax-loader.gif" /> &nbsp; Accediendo ...');
						setTimeout(' window.location.href = "index.php"; ',1000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Reintentar');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});