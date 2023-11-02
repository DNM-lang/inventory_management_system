<?php
include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
        <div id="output"></div>
            <hr class="divider">
            <h2 style="color: grey; font-family: fantasy">DNM_B_inc</h2>
            <hr class="divider">
            <div class="form-box">
                <form action="home.php" method="post">
                    <!-- Input fields for username and password -->
                    <input name="username" type="text" required placeholder="Username">
                    <input name="password" type="password" required placeholder="Password">
                    <button class="btn btn-info btn-block login" type="submit" name="submit">Login</button>
                </form>
            </div>
            <p>
                <a href="#">I can't access my account</a>
            </p>
            <hr class="divider">
            <a href="register.php" class="btn btn-info btn-block login" style="height: 42px;">Create a new account</a>
        </div>
    </div>
</body>
</html>
