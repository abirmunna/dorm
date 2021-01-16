<!DOCTYPE html>
<html>
<head>
  <style media="screen">
    body{
      background-image: url("../../img/forget.jpg");
    }
    .main{
      margin-left: 350px;
    }

  </style>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","a_loader.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div>
  <div>
    <?php include "ad_nav.php" ?>
  </div>
  <form class="main">
    <br>
    <br>
  <select name="users" onchange="showUser(this.value)">
  <option value="">Select student year:</option>
  <option value="1">1st Year</option>
  <option value="2">2nd Year</option>
  <option value="3">3rd Year</option>
  <option value="4">4th Year</option>
  </select>

  </form>
  <br>
  <p  id="txtHint"> </p>
</div>

</body>
</html>
