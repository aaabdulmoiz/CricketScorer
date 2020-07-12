<?php
session_start();

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
session_destroy();
header("location:loginPage.php");
 ?>
