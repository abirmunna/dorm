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
        This is Meal Menu page
      </div>
        <div class="output">

        <?php
        include_once '../../db/db.php';
        session_start();

        $sql = "SELECT * FROM menu";
        $result = mysqli_query($db, $sql);

        echo "<table>"; // start a table tag in the HTML

        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['day'] . "</td><td>" . $row['breakfast_item'] . "</td><td>" . $row['lunch_item'] . "</td><td>" . $row['dinner_item'] . "</td></tr>";  //$row['index'] the index here is a field name
        }

        echo "</table>"; //Close the table in HTML

        mysqli_close($db);

        ?>
</div>

</body>
</html>
