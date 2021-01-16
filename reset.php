<?php
include "db/db.php";
$q = strval($_GET['q']);

$sql = "SELECT email FROM pass_reset WHERE random= '$q';";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

$id = mysqli_real_escape_string($db, $_POST['std_id']);
$pass = mysqli_real_escape_string($db, $_POST['pass1']);
$pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "UPDATE login SET std_pass='$pass' WHERE std_id= '$id';";
$data = mysqli_query($db, $sql);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/complaint.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
    function validate() {
      if( document.myForm.std_id.value == "" ) {
            alert( "Please provide valid input!" );
            document.myForm.std_id.focus() ;
           return false;
            }
  		if( document.myForm.pass1.value == "" ) {
            alert( "Please provide valid input!" );
            document.myForm.std_id.focus() ;
      		 return false;
            }

  		if( document.myForm.pass2.value == "" ) {
  				  alert( "Please provide valid input!" );
  				  document.myForm.std_email.focus() ;
  				 return false;
  			}
      if ( document.myForm.pass1.value != document.myForm.pass2.value) {
        alert( "Password did not match!" );
        document.myForm.std_email.focus() ;
       return false;
      }
  	 return(true);
  }
</script>
<style>

</style>
  </head>
  <body>
  <div class="background">
      <div class="wrapper1">
  	<div class="registration_form">
  		<div class="title">
  			Reset Password
  		</div>

  		<form name = "myForm" action="" method="post" onsubmit = "return(validate());">
  			<div class="form_wrap">
          <div class="input_wrap">
            <label id="std_email">Student ID</label>
            <input type="text" name="std_id" id="std_email" placeholder="Enter New Password">
          </div>
  					<div class="input_wrap">
  						<label id="std_email">New Password  </label>
  						<input type="text" name="pass1" id="std_email" placeholder="Enter New Password">
  					</div>
            <div class="input_wrap">
              <label id="std_email">Confirm Password</label>
              <input type="text" name="pass2" id="std_email" placeholder="Enter New Password">
            </div>
  				<div class="input_wrap">
  					<input type="submit" value="Reset now" class="submit_btn">

  				</div>
  			</div>
  		</form>
  	 </div>
    </div>
  </div>
  </body>
</html>
