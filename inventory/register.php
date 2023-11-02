<?php
include "server.php"; // Include the server.php file with database functions
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <!-- Add stylesheet links for Bootstrap and your custom style.css -->
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <div class="login-container">
    <div id="output"></div>
            <hr class="divider">
            <h2 style="color: grey; font-family: fantasy">REGISTER</h2>
            <hr class="divider">
      <div class="form-box">
      <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <input type="text" name="username" value="<?php echo $username; ?>" required placeholder="username">
        <input type="email" name="email" value="<?php echo $email; ?>"required placeholder="email">
        <input type="password" name="password_1" required placeholder="password">
        <label>Confirm password</label>
        <input type="password" name="password_2"required placeholder="confirm password">
        <button type="submit" class="btn btn-info btn-block login" name="reg_user">Register</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>
