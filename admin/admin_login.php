<?php
require_once '../load.php';
require_once 'scripts/encryption.php';
$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if(!empty($username) && !empty($password)){
        //Encrypt it
        $password = encrypt($password);
        //do the login here
        $message = login($username, $password, $ip);
    }else{
        $message = 'Please fill out the required fields';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roku Flashback App</title>
</head>
<body>

<div class="logo">
<a href="admin_login.php"><img src="../images/roku.svg"></img></a> 
</div>

<div class="sign">
<h1>ENJOY ALL THE BEST MUSIC, MOVIES AND TV SHOWS</h1>
</div>

<div class="login">
<form id="loginForm">
   <h7> <?php echo !empty($message)?$message:'';?> </h7>
    <form action="admin_login.php" method="post">
    <label class="loginLabel"><h5>Username:</h5></label><br>
    <input type="text" name="username" class="usernameInput" value=""><br>

    <label class="loginLabel"><h5>Password:</h5></label><br>
    <input type="password" name="password" class="passwordInput" value=""> <br>

    <button class="submitLogin" formmethod="post" name="submit">Login</button>
    </form>
</form>
</div>
    
</body>
</html>