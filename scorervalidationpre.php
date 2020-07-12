<?php
    session_start();
    $con = mysqli_connect('localhost' , 'moiz', '123456');
    mysqli_select_db($con, 'cricketscorer');
    $cteamname=$_GET['team_name'];
    $_SESSION['cteamname']=$cteamname;
    header('location:scorervalidation.php');
 ?>
