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
    <link rel="stylesheet" href="../../css/complaint.css">
    <style>
      .bck{
        height: 100vh;
        background-image: url("../../img/contact-01.jpg");
        background-size: cover;
        background-repeat: repeat;
      }
    </style>
  </head>
  <script type="text/javascript">

</script>
  <body>
    <div class="bck">
      <div>
        <?php include "std_nav.php" ?>
      </div>

</div>

</body>
</html>
