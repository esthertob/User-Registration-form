<?php
require_once '../config/functions.php';
require_once '../config/db.php';
if(!isset($_SESSION['ID']) && !isset($_SESSION['EMAIL']))
{
    header("location: ../html/index.php");
}

$id = $_SESSION['ID'];
$query = "select * from signup where id = '$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<div class="card">
    <div class="card-image">
        <img src="https://placekitten.com/300/150" alt="Card Image">
    </div>
    <div class="card-content">
        <h2 class="card-title">Card Title</h2>

        <div class="card-body">
        <p class="card-description">UserName: <span><?php echo $row['username']?></span></p>
        <p class="card-description">UserEmail: <span><?php echo $row['email']?></span></p>
        </div>

        <div class="card-footer">
        <a href="logout.php" class="card-button">Click Me</a>
        </div>
    </div>
</div>
</body>
</html>