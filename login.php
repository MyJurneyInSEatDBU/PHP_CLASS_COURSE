<?php

session_start();
$_SESSION["username"]="Abebe";
$_SESSION["role"]=="admin";
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Login Successful</h2>
    <a href="dashboard.php">Go to Dashboard</a>
</body>
</html>
