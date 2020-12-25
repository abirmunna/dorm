

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>ADD USER</title>
<link rel="stylesheet" href="reg_form.css" type="text/css">
  </head>
  <body>

    <form action="reg_handler.php" method="post">
      <div class="container">
      <h1 align="center">Register</h1>
      <label><b>BUP ID No: </b></label>
      <input type="text" name="bup_id" required>

      <label><b>Name: </b></label>
      <input type="text" name="name" required>

      <label><b>E-mail: </b></label>
      <input type="text" name="email" required>

      <label><b>Password: </b></label>
      <input type="password" name="pass" required>

      <button class="registerbtn" type="submit" name="submit"><b>Add user</b></button>

    </form>
  </div>
  </body>
</html>
