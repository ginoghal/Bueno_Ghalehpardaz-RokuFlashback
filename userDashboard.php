<?php 
require_once 'load.php';
confirm_logged_in();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>User Dashboard</h1>
    <?php if(!isset($_GET['Pcontrols'])|| !isset($_GET['editacc'])):?>
    <h3>Parental Controls <a href="userDashboard.php?Pcontrols=true">*</a>*</h3>
    <h3>Edit My account <a href="userDashboard.php?editacc=true">*</a></h3>
    <?php endif;?>
    <?php if(!isset($_GET['Pcontrols'])):?>


    <?php endif;?>

</body>
</html>