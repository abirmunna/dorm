<?php
session_start();
include "../../db/db.php";
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
}
else {
  header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/complaint.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
    function validate() {
  		if( document.myForm.p_pass.value == "" ) {
            alert( "Please provide valid input!" );
  					document.getElementById("std_id").style.color = "yellow";
            document.myForm.std_id.focus() ;
      		 return false;
            }
  		if (document.myForm.p_pass.value !== "") {
  					document.getElementById("std_id").style.color = "gray";
  			}
  		if( document.myForm.n_pass.value == "" ) {
  				  alert( "Please provide valid input!" );
  					document.getElementById("std_email").style.color = "yellow";
  				  document.myForm.std_email.focus() ;
  				 return false;
  			}
  		if (document.myForm.n_pass.value !== "") {
  	 				document.getElementById("std_email").style.color = "gray";
  	 		}

  	 return(true);
  }
</script>
<style>

</style>
  </head>
  <body>
  <div class="background">
    <div>
      <?php include "std_nav.php" ?>
    </div>

      <div class="wrapper1">
  	<div class="registration_form">
  		<div class="title">
  			Reset Password
  		</div>

  		<form name = "myForm" action="../handler/reset_handler.php" method="post" onsubmit = "return(validate());">
  			<div class="form_wrap">
  					<div class="input_wrap">
  						<label id="std_id">Previous Password</label>
  						<input type="text" name="p_pass" id="std_id" placeholder="Enter Old Password">
  					</div>
  					<div class="input_wrap">
  						<label id="std_email">New Password  </label>
  						<input type="text" name="n_pass" id="std_email" placeholder="Enter New Password">
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
