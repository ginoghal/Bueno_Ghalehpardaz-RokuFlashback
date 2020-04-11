<?php 
require_once '../load.php';
confirm_logged_in();

$id = $_SESSION['user_id'];
$current_user = getSingleUser($id);

if(!$current_user){
    $message = 'Failed to get user info!';
}

if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $message = editUser($id, $fname, $username, $email, $password);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our Roku site</title>
    <title>Edit User</title>
</head>
<body>
<div class="logo">
<a href="index.php"><img src="../images/roku.svg"></img></a> 
</div>

<div class="editMe">
<h2>Edit User</h2>
<?php echo !empty($message)? $message:'';?>

    <form action="admin_edituser.php" method="post">
    <?php if(!is_string($current_user)):?>

    <?php while($user_info = $current_user->fetch(PDO::FETCH_ASSOC)):?>

    <label>Name</label>
    <input type="text" name="fname" value="<?php echo $user_info['user_fname'];?>"><br><br>

    <label>Username</label>
    <input type="text" name="username" value="<?php echo $user_info['user_name'];?>"><br><br>

    <label>Email</label>
    <input type="text" name="email" value="<?php echo $user_info['user_email'];?>"><br><br>

    <label>Password</label>
    <input type="password" name="password" value="<?php echo $user_info['user_pass'];?>"><br><br>

    <button type="submit" name="submit">Edit Account</button>
</div>
    <?php endwhile;?>
<?php endif;?>
    </form>
</body>
</html>