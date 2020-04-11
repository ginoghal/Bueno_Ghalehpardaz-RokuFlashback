<?php
  require_once 'load.php';
function confirm_logged_in_dash(){
    if(!isset($_SESSION['user_id'])){
        redirect_to('admin/admin_login.php');
    }
}
confirm_logged_in_dash();
  

    if(isset($_GET['year'])){
        $year = $_GET['year'];
        
        $tbl = 'tbl_movies';
        
        if(isset($_GET['series'])){
            $year = $_GET['year'];
            $tbl = 'tbl_series';
        }

        $getMovies = getMoviesByyear($year,$tbl);
       
    }else{
        $movie_table = 'tbl_movies';
        $getMovies = getAll($movie_table);
    }
    if(isset($_GET['kids'])){
        $getMovies = getKidMovies();
        $getSeries = getKidSeries();
    }
    if(isset($_GET['filter'])){
        $tbl='tbl_movies';
        $filter = $_GET['filter'];
        $getMovies = getMoviesByFilter($filter,$tbl);
    }
    if(isset($_GET['series'])){
        $tbl = 'tbl_series';

        if(isset($_GET['year'])){
        $year = $_GET['year'];
        $getMovies = getMoviesByyear($year,$tbl);

        }elseif(isset($_GET['filter'])){
            $getMovies = getMoviesByFilter($filter,$tbl);
        }else{
        $getMovies = getAll($tbl);
        }
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
<a href="index.php"><img src="images/roku.svg"></img></a> 
</div>
    <?php  if(!isset($_GET['kids'])):?>
  
    <?php include 'templates/header.php'; ?>
  


    
    <?php while($row = $getMovies->fetch(PDO::FETCH_ASSOC)):?>
    
        <!-- <video></video> -->
        <?php if(!isset($_GET['series']) && !isset($_GET['music'])):?>
        <div class="movie-item">
            <img src="images/<?php echo $row['movies_cover'];?>" alt="<?php echo $row['movies_title'];?>">
            <h2><?php echo $row['movies_title']; ?></h2>
            <h4><?php echo $row['movies_year']; ?></h4>
           
            <a href="details.php?movie_id=<?php echo $row['movies_id'];?>">Watch</a>
        </div>
  
        <?php endif ;?>

        <?php if(isset($_GET['series'])):?>
            <div class="movie-item">
            <img src="images/<?php echo $row['series_cover'];?>" alt="<?php echo $row['series_title'];?>">
            <h2><?php echo $row['series_title']; ?></h2>
            <h4><?php echo $row['series_year']; ?></h4>
           
            <a href="details.php?series_id=<?php echo $row['series_id'];?>">Watch</a>
        </div>
        <?php endif;?>


    <?php endwhile;?>

   
    <?php endif;?>
    <?php  if(isset($_GET['kids'])):?>
        <?php include 'templates/kidsHeader.php'; ?>
        <?php include 'templates/footer.php'; ?>
   
   
    <?php endif;?>
    
 
</body>
</html>