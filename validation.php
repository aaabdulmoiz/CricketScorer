<?php

session_start();

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
$username = $_POST['user'];
$password = $_POST['password'];

$s = "select * from registration where username = '$username' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$username;
    header('location:home.php');
}
else{
    header('location:loginPage.php');
}

?>
