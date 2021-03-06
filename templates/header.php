
<?php                          
function getUserPic($id){
    $pdo = Database::getInstance()->getConnection();
    $avatar_stmt = 'SELECT user_avatar from tbl_user WHERE user_id = :id';
    $avatar_query = $pdo->prepare($avatar_stmt);
    $avatar_query->execute(
        array(
            ':id'=>$id
        )
        );

    $pic = $avatar_query->fetch(PDO::FETCH_ASSOC);
    return $pic;
    
}
$id = $_SESSION['user_id'];
$user_avatar = getUserPic($id);


?>
<header>
    <nav class="filterNav">
    
    
    <ul>
    <li><a href="userDashboard.php"><img class="profilePic" src="images/<?php echo implode($user_avatar);?>" alt="Profile Pic"></a></li>
    <li><a href="admin/admin_logout.php">Logout</a></li>
    <li><a href="index.php?series=true">TV Series</a></li>
    <li><a href="index.php?music=true">Music</a></li>
    <li><a href="index.php">Movies</a></li>
    <li><a href="index.php?kids=true">RokuKids</a></li></ul>
    
    <ul class="cate">
        <h1>Select by Year</h1>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>year=50">50's</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>year=60">60's</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>year=70">70's</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>year=80">80's</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>year=90">90's</a></li>
            
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true<?php endif;?>">All</a></li>
    </ul>

    <ul class="cate">
        <h1>Select by Genre</h1>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>filter=action">Action</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>filter=comedy">Comedy</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>filter=drama">Drama</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>filter=cartoon">Cartoon</a></li>
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true&<?php endif;?>filter=family">Family</a></li>
  
        <li><a href="index.php?<?php if(isset($_GET['series'])):?>series=true<?php endif;?>">All</a></li>
    </ul>
    </nav>
        </header>