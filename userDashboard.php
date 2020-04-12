<?php 
require_once 'load.php';
confirm_logged_in();

$getMovies = getKidMovies();
$getSeries = getKidSeries();
$getMusic = getKidMusic();
if(isset($_GET['movies_id'])){
    $type='movies';
    $bl_id = $_GET['movies_id'];
    blacklist($type,$bl_id);
}
if(isset($_GET['series_id'])){
    $type='series';
    $bl_id = $_GET['series_id'];
    blacklist($type,$bl_id);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>User Dashboard</title>
</head>
<body>
<div class="logo">
<a href="index.php"><img src="images/roku.svg"></img></a> 
</div>
<div class="dash">
    <h1>User Dashboard</h1>
    <?php if(!isset($_GET['Pcontrols'])|| !isset($_GET['editacc'])):?>
    <h3>Parental Controls <a href="userDashboard.php?Pcontrols=true">*</a></h3>
    <h3>Edit My account <a href="userDashboard.php?editacc=true">*</a></h3>
   <div class="return"> <a href="index.php">Go Back</a> </div>
    <?php endif;?>

    <?php if(isset($_GET['Pcontrols'])):?>
        <h3>Movies:</h3>
        <?php while($row = $getMovies->fetch(PDO::FETCH_ASSOC)):?>
        <h3><?php echo $row['movies_title'];?> <a href="userDashboard?movies_id=<?php echo $row['movies_id'];?>">Remove from RokuKids</a></h3>
        <?php endwhile;?>
        <h3>Series:</h3>
        <?php while($row = $getSeries->fetch(PDO::FETCH_ASSOC)):?>
        <h3><?php echo $row['series_title'];?> <a href="userDashboard?series_id=<?php echo $row['series_id'];?>">Remove from RokuKids</a></h3>
        <?php endwhile;?>
        <h3>Music:</h3>
        <?php while($row = $getMusic->fetch(PDO::FETCH_ASSOC)):?>
        <h3><?php echo $row['music_title'];?> <a href="userDashboard?music_id=<?php echo $row['music_id'];?>">Remove from RokuKids</a></h3>
        <?php endwhile;?>
    <?php endif;?>
    <?php if(isset($_GET['editacc'])):?>
        <?php redirect_to('admin/admin_edituser.php'); ?>
    <?php endif;?>
    </div>


</body>
</html>