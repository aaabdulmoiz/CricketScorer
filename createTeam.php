<?php

session_start();

$con = mysqli_connect('localhost' , 'moiz', '123456');
mysqli_select_db($con, 'cricketscorer');
$teamName = $_POST['team1'];
$teamCode = $_POST['teamcode'];
$nameowner=$_SESSION['username'];
$sas="Select * from teams where username='$nameowner'";
$aresult = mysqli_query($con,$sas);
$numm = mysqli_num_rows($aresult);
if(numm==1){
    header('location:home2.php');
}
$p1f = $_POST['p1f'];
$p1l = $_POST['p1l'];
$p2f = $_POST['p2f'];
$p2l = $_POST['p2l'];
$p3f = $_POST['p3f'];
$p3l = $_POST['p3l'];
$p4f = $_POST['p4f'];
$p4l = $_POST['p4l'];
$p5f = $_POST['p5f'];
$p5l = $_POST['p5l'];
$p6f = $_POST['p6f'];
$p6l = $_POST['p6l'];
$p7f = $_POST['p7f'];
$p7l = $_POST['p7l'];
$p8f = $_POST['p8f'];
$p8l = $_POST['p8l'];
$p9f = $_POST['p9f'];
$p9l = $_POST['p9l'];
$p10f = $_POST['p10f'];
$p10l = $_POST['p10l'];
$p11f = $_POST['p11f'];
$p11l = $_POST['p11l'];



$s = "select * from teams where team_name = '$teamName'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "Team Name already taken";
}
else{
    $reg = "insert into teams (team_name, username, team_code)
             values ('$teamName','$nameowner','$teamCode')";
    mysqli_query($con,$reg);
    $reg1 = "insert into players (first_name, last_name, team_name)
            values ('$p1f','$p1l','$teamName')";
    mysqli_query($con,$reg1);
    $reg2 = "insert into players (first_name, last_name, team_name)
            values ('$p2f','$p2l','$teamName')";
    mysqli_query($con,$reg2);
    $reg3 = "insert into players (first_name, last_name, team_name)
            values ('$p3f','$p3l','$teamName')";
    mysqli_query($con,$reg3);
    $reg4 = "insert into players (first_name, last_name, team_name)
            values ('$p4f','$p4l','$teamName')";
    mysqli_query($con,$reg4);
    $reg5 = "insert into players (first_name, last_name, team_name)
            values ('$p5f','$p5l','$teamName')";
    mysqli_query($con,$reg5);
    $reg6 = "insert into players (first_name, last_name, team_name)
            values ('$p6f','$p6l','$teamName')";
    mysqli_query($con,$reg6);
    $reg7 = "insert into players (first_name, last_name, team_name)
            values ('$p7f','$p7l','$teamName')";
    mysqli_query($con,$reg7);
    $reg8 = "insert into players (first_name, last_name, team_name)
            values ('$p8f','$p8l','$teamName')";
    mysqli_query($con,$reg8);
    $reg9 = "insert into players (first_name, last_name, team_name)
            values ('$p9f','$p9l','$teamName')";
    mysqli_query($con,$reg9);
    $reg10 = "insert into players (first_name, last_name, team_name)
            values ('$p10f','$p10l','$teamName')";
    mysqli_query($con,$reg10);
    $reg11 = "insert into players (first_name, last_name, team_name)
            values ('$p11f','$p11l','$teamName')";
    mysqli_query($con,$reg11);

    echo "Team Registration Successful";
    header('location:home2.php');
}

?>
