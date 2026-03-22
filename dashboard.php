<?php

session_start();
if(isset($_SESSION["username"])){
    $user=$_SERVER["username"];
}
else{
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Welcome <?php echo $user; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>