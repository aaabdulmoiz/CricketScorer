<?php
session_start();
$_SESSION['username']= $_SESSION['username'];
header("location:home2.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?>, Kaafi Jaldi shuru kardia project </h1>
    <header>
        <div class="button">
            <a href="home2.php" class="btn">Asli Scene </a>
        </div>
    </header>
</body>
</html>
