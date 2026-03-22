<?php

if(isset($_COOKIE["username"])){
    $user=$_COOKIE["username"];
}else{
    $user="Guest";
}
?>
<!DOCTYPE html>
<html>
    <body>
        <h2>welcome <?php echo $user ?> </h2>
    </body>
    <html>