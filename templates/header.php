
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
    
    </ul>
    <ul>
    <li><a href="userDashboard.php"><img src="images/<?php echo implode($user_avatar);?>" alt="Profile Pic"></a></li>
    <li><a href="admin/admin_logout.php">Logout</a></li>
    <li><a href="index.php?kids=true">RokuKids</a></li></ul>
    
    <ul class="cate">
    <h1>Select by Category</h1>
    <li><a href="index.php?filter=action">Action</a></li>
    <li><a href="index.php?filter=comedy">Comedy</a></li>
    <li><a href="index.php?filter=family">Family</a></li>
    <li><a href="index.php">All</a></li>
    </nav>
        </header>