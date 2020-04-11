<?php

require_once 'load.php';

if(isset($_GET['movie_id'])){
    $movie_id = $_GET['movie_id'];
    $type = 'movies';

    $getMovies = getVideo($movie_id,$type);
}
if(isset($_GET['series_id'])){
    $series_id = $_GET['series_id'];
    $type = 'series';

    $getMovies = getVideo($series_id,$type);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the movie CMS</title>
</head>
<body>
<?php include 'templates/header.php'?>



    <div class="movie-item">
    <?php echo $getMovies; ?>
    </div>


    <?php include 'templates/footer.php';?>
    
</body>
</html>