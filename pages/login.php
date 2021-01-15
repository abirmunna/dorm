<!DOCTYPE html>
<html>
<head>
	<title>Dormitory Management System Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript">
	function validate() {
		if( document.myForm.uname.value == "" ) {
          alert( "Please provide your Username and Password!" );
					document.getElementById("name").style.color = "red";
          document.myForm.uname.focus() ;
    		 return false;
          }
		if (document.myForm.uname.value !== "") {
					document.getElementById("name").style.color = "gray";
			}
		if( document.myForm.pwd.value == "" ) {
				  alert( "Please provide your Username and Password!" );
					document.getElementById("pwd").style.color = "red";
				  document.myForm.pwd.focus() ;
				 return false;
			}
		if (document.myForm.pwd.value !== "") {
	 				document.getElementById("pwd").style.color = "gray";
	 		}

	 return(true);
}

</script>
</head>
<body>
	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">
			<form name = "myForm" action="../handler/login_handler.php" method="post" onsubmit = "return(validate());">
				<img src="../img/avatar.svg">
				<h2 class="title">Welcome to Dormitory Management System<br>Login to Continue</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5 id="name" >Username</h5>
           		   		<input name="uname" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 id="pwd">Password</h5>
           		    	<input name="pwd" type="password" class="input">
            	   </div>
            	</div>
							<!--<?php// echo"<p style='color:red'>" . $q . "</p>"; ?>-->
            	<a href="forget.php">Forgot Password?</a>
            	<button type="submit" class="btn" value="submit">Login</button>
							<a href="reg.php">Register</a>
            </form>

        </div>
    </div>


  	<script type="text/javascript" src="../js/login.js"></script>
</body>
</html>
<script type="text/javascript">
<?php
	$q=strval($_GET['q']);
 ?>
var q = "<?php echo $q ?>"
if (q == "invalid") {
	alert("Invalid Username or Password");
}
</script>
