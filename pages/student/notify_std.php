<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <div>
      <?php include "std_nav.php" ?>
    </div>
      <div class="header">
        Notification

        <div class="output">
          <?php
          include_once '../../db/db.php';
          session_start();

          $sql = "SELECT msg FROM notification WHERE std_id= 18511071;";
          $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "Notification: " . $row["msg"]. "<br>";
            }
          } else {
            echo "No Notification";
          }

          mysqli_close($db);
          ?>
        </div>
      </div>
</body>
</html>
