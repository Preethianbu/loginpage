<?php 
// require "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheet.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <style>
    
</style>
</head>
<body>
    <div class="container">
    <h2 style="color: blue">BLUEBASE SOFTWARE DEVELOPMENT</h2>

    <!-- <div class="card" style="width: 18rem; height: 33vh"> -->
    <center><h4 class="log" style="font-style: ;">Login</h4></center>
    <div class="login">
        <form action="entry.php" method="POST">
            <div class="inputbox"><i class="fas fa-user"></i> <input type="text" style = " background : transparent; " name="name" placeholder="Username/Email address"></div><br>
            <div class="inputbox" ><i class="fas fa-lock"></i> <input type="password" style = " background : transparent;" name="password" placeholder="Password"></div><br>
            <div class="remember"><input type="checkbox" name="rememberme"><a href="#">Forgot password</a>
            <br><br>
            <p><i class="fas fa-sign-in-alt"></i> <input class="btn btn-primary" type="submit" value="Log in"></p>
            <div class="registration"><a href="secondpg.php">Don't have an account? Register here</a>
</form>
</div>
    </div>
</div>
</body>
</html>


  