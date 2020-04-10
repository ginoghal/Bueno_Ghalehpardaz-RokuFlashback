<?php
  require_once 'load.php';
function confirm_logged_in_dash(){
    if(!isset($_SESSION['user_id'])){
        redirect_to('admin/admin_login.php');
    }
}
confirm_logged_in_dash();
  

    if(isset($_GET['filter'])){
        $args = array(
            'tbl'=>'tbl_movies',
            'tbl2'=>'tbl_genre',
            'tbl3'=>'tbl_mov_genre',
            'col'=>'movies_id',
            'col2'=>'genre_id',
            'col3'=>'genre_name',
            'filter'=>$_GET['filter']
        );

        $getMovies = getMoviesByFilter($args);
    }else{
        $movie_table = 'tbl_movies';
        $getMovies = getAll($movie_table);
    }
    if(isset($_GET['kids'])){
        $getMovies = getKidMovies();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our Roku site</title>
</head>
<body>
<div class="logo">
<a href="#"><img src="images/roku.svg"></img></a> 
</div>
    <?php  if(!isset($_GET['kids'])):?>
    <?php include 'templates/header.php'; ?>

    
    <?php while($row = $getMovies->fetch(PDO::FETCH_ASSOC)):?>
    
        <!-- <video></video> -->
        <div class="movie-item">
            <img src="images/<?php echo $row['movies_cover'];?>" alt="<?php echo $row['movies_title'];?>">
            <h2><?php echo $row['movies_title']; ?></h2>
            <h4><?php echo $row['movies_year']; ?></h4>
            <a href="details.php?id=<?php echo $row['movies_id'];?>">Watch</a>
        </div>
    </div>
    <?php endwhile;?>
    <?php include 'templates/footer.php'; ?>
    <?php endif;?>
    <?php  if(isset($_GET['kids'])):?>
    <!-- please include header made specifically for the kids version -->
     <!-- template for the kids version of roku with all the following content fetched by the GetKid Movies function -->
        <?php while($row = $getMovies->fetch(PDO::FETCH_ASSOC)):?>
   
            <img src="images/<?php echo $row['movies_cover'];?>" alt="<?php echo $row['movies_title'];?>">
    <?php endwhile;?>
    <?php endif;?>
    
 
</body>
</html>