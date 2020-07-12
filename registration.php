<?php

session_start();
header('location:loginPage.php');

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['user'];
$password = $_POST['password'];

$s = "select * from registration where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "Username already taken";
}
else{
    $reg = "insert into registration (username,firstName,lastname,password)
             values ('$username','$fname','$lname','$password')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}

?>
