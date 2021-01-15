<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/meal_menu.css">
<!--new-->
<style>
table{
border-style:solid;
border-width:3px;
border-color: #6FFF34;
}



</style>
</head>
<body bgcolor="#EEFDEF">

<!--new
</head>
<body>-->
    <div>
      <?php include "std_nav.php" ?>
    </div>

      <div class="output">
          <h1>Every week Meal Menu list</h1>
          <?php
          include_once '../../db/db.php';


          $sql = "SELECT * FROM menu";
          $result = mysqli_query($db, $sql);
//new


echo "<table border='1'>
<tr>
<th>day</th>
<th>Breakfast Item</th>
<th>lunch Item</th>
<th>dinner Item</th>
</tr>";

while($row = mysqli_fetch_array($result)){

echo "<tr>";
echo "<td>"  . $row['day'] . "</td>";
echo "<td>" . $row['breakfast_item'] . "</td>";
echo "<td>" . $row['lunch_item'] . "</td>";
echo "<td>" . $row['dinner_item'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($db);
?>

        <!--  echo "<table>"; // start a table tag in the HTML

          while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
          echo "<tr><td>" . $row['day'] . "</td><td>" . $row['breakfast_item'] . "</td><td>" . $row['lunch_item'] . "</td><td>" . $row['dinner_item'] . "</td></tr>";  //$row['index'] the index here is a field name
          }

          echo "</table>"; //Close the table in HTML

          mysqli_close($db);

          ?>*/ -->
      </div>



</body>
</html>
