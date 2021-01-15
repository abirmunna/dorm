<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/complaint.css">
    <style>
      .bck{
        height: 100vh;
        background-image: url("../../img/forget.jpg");
        background-size: cover;
        background-repeat: repeat;
      }
    </style>
  </head>
  <script type="text/javascript">
  function validate() {
    if( document.myForm.std_id.value == "" ) {
          alert( "Please provide student Id!" );
          document.getElementById("std_id").style.color = "yellow";
          document.myForm.std_id.focus() ;
         return false;
          }
    if (document.myForm.std_id.value !== "") {
          document.getElementById("std_id").style.color = "gray";
      }
    if( document.myForm.msg.value == "" ) {
          alert( "Please write a message!" );
          document.getElementById("msg").style.color = "yellow";
          document.myForm.msg.focus() ;
         return false;
      }
    if (document.myForm.msg.value !== "") {
          document.getElementById("msg").style.color = "gray";
      }

   return(true);
}
</script>
  <body>
    <div class="bck">
      <div>
        <?php include "std_nav.php" ?>
      </div>

      <div class="background">
        <div class="wrapper1">
      <div class="registration_form">
        <div class="title">
          Submit a Complaint :
        </div>

        <form name = "myForm" action="../../handler/complaint_handler.php" method="post" onsubmit = "return(validate());">
          <div class="form_wrap">
              <div class="input_wrap">
                <label id="std_id">Student ID</label>
                <input type="text" name="std_id" id="std_id" placeholder="Enter student Id">
              </div>
              <div class="input_wrap">
                <label id="msg">Message</label>
                <input type="text" name="msg" id="msg" placeholder="Enter your message">
              </div>

            <div class="input_wrap">
              <input type="submit" value="Send Message" class="submit_btn">
            </div>
          </div>
        </form>
       </div>
      </div>
      </div>
    </div>

</body>
</html>
