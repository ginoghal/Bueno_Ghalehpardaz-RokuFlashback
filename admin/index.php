<?php
    require_once '../load.php';
    confirm_logged_in();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Roku Flashback App</title>
</head>

<body>
<h2>Welcome <?php echo $_SESSION['user_name'];?></h2>
<?php echo !empty($message)?$message:'';?>

<a href="admin_logout.php">Log out</a>
<a href="admin_createuser.php">Create User</a>
<a href="admin_edituser.php">Edit my Account</a>
<a href="admin_deleteuser.php">Delete User</a>
    
</body>
</html>