<?php
    session_start();
   include('mysqlInterface.php');
   if(isset($_SESSION['Login']))
   {
	    header("Location: home.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Social Housing | Login</title>
		<?php include('header.php'); ?>

		<style type="text/css">
				input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
						border-bottom: 1px solid #797776;
						-webkit-box-shadow: 0 1px 0 0 #797776;
						box-shadow: 0 1px 0 0 #797776;
				}
				input:not([type]):focus:not([readonly]) + label, input[type=text]:not(.browser-default):focus:not([readonly]) + label, input[type=password]:not(.browser-default):focus:not([readonly]) + label, input[type=email]:not(.browser-default):focus:not([readonly]) + label, input[type=url]:not(.browser-default):focus:not([readonly]) + label, input[type=time]:not(.browser-default):focus:not([readonly]) + label, input[type=date]:not(.browser-default):focus:not([readonly]) + label, input[type=datetime]:not(.browser-default):focus:not([readonly]) + label, input[type=datetime-local]:not(.browser-default):focus:not([readonly]) + label, input[type=tel]:not(.browser-default):focus:not([readonly]) + label, input[type=number]:not(.browser-default):focus:not([readonly]) + label, input[type=search]:not(.browser-default):focus:not([readonly]) + label, textarea.materialize-textarea:focus:not([readonly]) + label {
						color: #797776;
				}
				.section {
				     padding-top: 0rem; 
				}
				.grey.lighten-4 {
				    background-color: #f5f5f500 !important;
				}
		</style>
</head>
<body>
	<div class="section"></div>
	<div class="section"></div>
	<div class="section"></div>

	<main>
		<center>
			<img class="responsive-img" style="width: 155px;" src="images/logo.jpg" />
			<div class="section"></div>
			<div class="container">
			<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

			<form class="col s12" method="post">
				<div class="row">
					<div class="col s12">
						<div style="color: #797776; font-size: 16px; font-weight: 500;">Account Login</div>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input class="validate" type="email" name="email" id="email" value="bharath@gmail.com "validate/>
						<label for="email">Enter your email</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input class="validate" type="password" name="password" id="password" value="111" validate/>
						<label for="password">Enter your password</label>
					</div>
				<label style="float: right;">
					<a class="pink-text" href="#!"><b>Forgot Password?</b></a>
				</label>
				</div>

				<br />
				<center>
					<div class="row">
						<a name="btn_login" id="LoginSubmit" class="col s12 btn btn-large waves-effect indigo">Login</a>
					</div>
				</center>
			</form>
		</div>
		<div class="text-12">
			<div class="empty" style="display:none;"><strong> One or more fields are empty </strong></div>
			<div class="error" style="color: red; display:none;"><strong>Username or password is wrong !! </strong></div>
			<div class="false" style="color: red; display:none;">Something Went Wrong, Try again !! </div>
		</div>
		</div>
		</center>

		<div class="section">
		</div>
		<div class="section"></div>
	</main>
	 
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#LoginSubmit').click(function(){
                	var email=$("#email").val();
                	var pass=$("#password").val();


                	$(".empty").css("display","none");
                	$(".error").css("display","none");
                	$(".false").css("display","none");
                	
                	/* Check for blank fields*/	
                	if((email=="" || pass=="" || email==null || pass==null))
                	{
	                	$(".empty").css("display","inherit");
		           	}else{

		           	/* Validate login*/
						$.ajax ({
							url: "login.php",
							type: "post",						
							dataType: "text",
							data: {email:email,pass:pass},
							success: function(response) {

									console.log(response)
									if(response =="true"){
										window.location.href="home.php";
									}else if(response =="false"){
	                					$(".error").css("display","inherit");	
									}else {
										$(".false").css("display","inherit");
									}
							},
							error: function(response){
								alert(response);
							}
						});
					}
                });
        });
		</script>
	</body>
</html>