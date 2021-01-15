<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/forget.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
    function validate() {
  		if( document.myForm.std_id.value == "" ) {
            alert( "Please provide your Id!" );
  					document.getElementById("std_id").style.color = "yellow";
            document.myForm.std_id.focus() ;
      		 return false;
            }
  		if (document.myForm.std_id.value !== "") {
  					document.getElementById("std_id").style.color = "gray";
  			}
  		if( document.myForm.std_email.value == "" ) {
  				  alert( "Please provide your Email Address!" );
  					document.getElementById("std_email").style.color = "yellow";
  				  document.myForm.std_email.focus() ;
  				 return false;
  			}
  		if (document.myForm.std_email.value !== "") {
  	 				document.getElementById("std_email").style.color = "gray";
  	 		}

  	 return(true);
  }
</script>
  </head>
  <body>
    <div class="background">
      <div class="wrapper1">
  	<div class="registration_form">
  		<div class="title">
  			Recover Password
  		</div>

  		<form name = "myForm" action="../handler/forget_handler.php" method="post" onsubmit = "return(validate());">
  			<div class="form_wrap">
  					<div class="input_wrap">
  						<label id="std_id">Student ID</label>
  						<input type="text" name="std_id" id="std_id" placeholder="Enter your Id">
  					</div>
  					<div class="input_wrap">
  						<label id="std_email">Email</label>
  						<input type="text" name="std_email" id="std_email" placeholder="Enter your Email Address">
  					</div>

  				<div class="input_wrap">
  					<input type="submit" value="Recover now" class="submit_btn">

  				</div>
  			</div>
  		</form>
  	 </div>
    </div>
  </div>
  </body>
</html>
<script type="text/javascript">
<?php
	$q=strval($_GET['q']);
 ?>
var q = "<?php echo $q ?>"
alert(q);
</script>
