<?php

session_start();

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
$teamCode = $_POST['teamcodev'];
echo $teamCode;
$team=$_SESSION['cteamname'];
$s="Select * from teams where team_name='$team' AND team_code='$teamCode'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    header('location:scorerlvl2.php');
}
else{
    header('location:scorervalidation.php');
}

?>
