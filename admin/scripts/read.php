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

function getKidMovies(){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * from tbl_movies WHERE for_kids = "yes"';
     $results = $pdo->query($queryAll);
     
    
    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }
}

function getSingleMovie($tbl, $col, $id){
    //TODO: refeer the function above to finish this one 
    //make sure it returns only one movie filtered by $col = $id

$pdo = Database::getInstance()->getConnection();

$queryONE = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$id;
$results = $pdo->query($queryONE);

if($results){
    return $results;
}else{
    return 'There was a problem accessing this information.';
}

}

function getMoviesByFilter($args){
    $pdo = Database::getInstance()->getConnection();

    $queryAll = 'SELECT * FROM '. $args['tbl'].' AS t,';
    $queryAll .= ' '. $args['tbl2'].' AS t2,';
    $queryAll .= ' '. $args['tbl3'].' AS t3';
    $queryAll .= ' WHERE t.'. $args['col'].' = t3.'.$args['col'];
    $queryAll .= ' AND t2.'. $args['col2'].' = t3.'.$args['col2'];
    $queryAll .= ' AND t2.'. $args['col3'].' = "'.$args['filter'].'"';
    
        


    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this information.';
    }



}