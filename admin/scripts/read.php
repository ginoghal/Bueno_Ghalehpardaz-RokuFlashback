<?php 


    function getAll($tbl){
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }
}
function getVideo($id, $type){
    $pdo = Database::getInstance()->getConnection();
    

    $queryVideo = 'SELECT ';

    if($type=='movies'){
        $queryVideo.='movies_trailer FROM tbl_movies WHERE movies_id = :id';
    }elseif($type=='series'){
        $queryVideo.='series_trailer FROM tbl_series WHERE series_id = :id';
    }elseif($type=='music'){
        $queryVideo.='music_audio FROM tbl_music WHERE music_id = :id';
    }
    $queryVideo_exec = $pdo->prepare($queryVideo);
    $queryVideo_exec->execute(
        array(
            ':id'=>$id
        )
        );
        $link = implode($queryVideo_exec->fetch(PDO::FETCH_ASSOC));
        $return = '<iframe  src="https://www.youtube.com/embed/'.$link.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
       
        
        
        return $return;
}

function getKidMovies(){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * from tbl_movies WHERE for_kids = "yes" AND locked IS null';
     $results = $pdo->query($queryAll);
     
    
    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }
}
function getKidMusic(){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * from tbl_music WHERE for_kids = "yes" AND locked IS null';
     $results = $pdo->query($queryAll);
     
    
    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }
}
function getKidSeries(){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * from tbl_series WHERE for_kids = "yes" AND locked IS null';
     $results = $pdo->query($queryAll);
     
    
    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }

}

// function getSingleMovie($tbl, $col, $id){
//     //TODO: refeer the function above to finish this one 
//     //make sure it returns only one movie yeared by $col = $id

// $pdo = Database::getInstance()->getConnection();

// $queryONE = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$id;
// $results = $pdo->query($queryONE);

// if($results){
//     return $results;
// }else{
//     return 'There was a problem accessing this information.';
// }

// }

function getMoviesByyear($year,$tbl){
    $pdo = Database::getInstance()->getConnection();
    $year = '19'.$year;
    
    if($tbl =='tbl_movies'){
        $queryAll = 'SELECT * FROM tbl_movies WHERE movies_year ';
    }elseif($tbl=='tbl_series'){
        $queryAll = 'SELECT * FROM tbl_series WHERE series_year ';
    }
    $endyear = $year + 9;

    $queryAll .= 'BETWEEN :year AND :endyear';    
    $queryAll_exec = $pdo->prepare($queryAll);
    $results = $queryAll_exec->execute(
        array(
            ':year'=>$year,
            ':endyear'=>$endyear
        
        )
        );
    if($results){
        return $queryAll_exec;
    }else{
        return 'There was a problem accessing this information.';
    }



}

function  getMoviesByFilter($filter,$tbl){
    $pdo = Database::getInstance()->getConnection();
    $filter = '%'.$filter.'%';
    
    
    if($tbl =='tbl_movies'){
        $queryAll = 'SELECT * FROM tbl_movies WHERE movies_filter ';
    }elseif($tbl=='tbl_series'){
        $queryAll = 'SELECT * FROM tbl_series WHERE series_filter ';
    }

    $queryAll .= 'LIKE :filter';  
  
    $queryAll_exec = $pdo->prepare($queryAll);
    $results = $queryAll_exec->execute(
        array(
            ':filter'=>$filter
        
        )
        );
    if($results){
        return $queryAll_exec;
    }else{
        return 'There was a problem accessing this information.';
    }
}