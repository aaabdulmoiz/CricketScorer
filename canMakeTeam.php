<?php

session_start();

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
$nameowner=$_SESSION['username'];
$sas="Select * from teams where username='$nameowner'";
$aresult = mysqli_query($con,$sas);
$numm = mysqli_num_rows($aresult);
if($numm==1){
    header('location:home2.php');
}
else{
    header('location:TeamMaker.php');
}
?>
