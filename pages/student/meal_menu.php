<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- <title>Animated Sidebar Menu | CodingLab</title> -->
    <link rel="stylesheet" href="../../css/welcome.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">
Side Menu</div>
<ul class="list-items">
<li><a href="../welcome.php"><i class="fas fa-home"></i>Home</a></li>
<li><a href="notify_std.php"><i class="fas fa-bell"></i>Notification</a></li>
<li><a href="meal_menu.php"><i class="fas fa-address-book"></i>Meal Menu</a></li>
<li><a href="#"><i class="fas fa-utensils"></i>Meal</a></li>
<li><a href="#"><i class="fas fa-money-check"></i>Fees</a></li>
<li><a href="#"><i class="fas fa-exclamation-circle"></i>Complaints</a></li>
<li><a href="#"><i class="fas fa-phone-square-alt"></i>Emergency Contucts</a></li>
<li><a href="admin/welcome.php"><i class="fas fa-unlock-alt"></i>Reset Password</a></li>
</ul>
  </nav>
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
