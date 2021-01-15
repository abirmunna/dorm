<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/meal_menu.css">
  </head>
  <body>
    <div>
      <?php include "std_nav.php" ?>
    </div>
    <div class="">
      <div class="output">
          <h1>This is Meal Menu page</h1>
          <?php
          include_once '../../db/db.php';


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
    </div>


</body>
</html>
