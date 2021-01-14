<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
    function validate1() {
      if( document.myForm.std_id.value == "" ) {
            alert( "Please provide all the info currectly!" );
            document.myForm.std_id.focus() ;
           return false;
            }
      if( document.myForm.pwd.value == "" ) {
            alert( "Please provide your Username and Password!" );
            document.getElementById("pwd").style.color = "red";
            document.myForm.pwd.focus() ;
           return false;
        }
     return(true);
  }
  </script>
  </head>
  <body>
    <div class="background">
      <div class="wrapper">
  	<div class="registration_form">
  		<div class="title">
  			Registration Form
  		</div>

  		<form name = "myForm" action="../handler/reg_handler.php" method="post" onsubmit = "return(validate1());">
  			<div class="form_wrap">
  					<div class="input_wrap">
  						<label id="std_id">Student ID</label>
  						<input type="text" name="std_id" id="std_id">
  					</div>
  					<div class="input_wrap">
  						<label for="std_name">Student Name</label>
  						<input type="text" name="std_name" id="std_name">
  					</div>
  				<div class="input_wrap">
  					<label for="std_email">Email Address</label>
  					<input type="text" name="std_email" id="std_email">
  				</div>
  				<div class="input_wrap">
  					<label for="std_year">Year</label>
  					<input type="text" name="std_year" id="std_year">
  				</div>
  				<div class="input_wrap">
  					<label for="std_dept">Department</label>
  					<input type="text" name="std_dept" id="std_dept">
  				</div>
          <div class="input_wrap">
            <label for="std_address">Address</label>
            <input type="text" name="std_address" id="std_address">
          </div>
          <div class="input_wrap">
            <label for="std_contact">Contact</label>
            <input type="text" name="std_contact" id="std_contact">
          </div>
          <div class="input_wrap">
            <label for="std_blood">Blood Group</label>
            <input type="text" name="std_blood" id="std_blood">
          </div>
          <div class="input_wrap">
            <label for="std_gname">Guardian Name</label>
            <input type="text" name="std_gname" id="std_gname">
          </div>
          <div class="input_wrap">
            <label for="std_gcontact">Guardian Contact</label>
            <input type="text" name="std_gcontact" id="std_gcontact">
          </div>
  				<div class="input_wrap">
  					<input type="submit" value="Register Now" class="submit_btn">
  				</div>
  			</div>
  		</form>
  	 </div>
    </div>
  </div>
  </body>
</html>
