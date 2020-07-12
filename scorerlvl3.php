<?php
    session_start();
    $con = mysqli_connect('localhost' , 'moiz', '123456');
    mysqli_select_db($con, 'cricketscorer');
    $batteamname=$_GET['team_name'];
    $_SESSION['batteamname']=$batteamname;
    echo $batteamname;
    echo $_SESSION['username'];
    $sa="Truncate Table match_players1";
    $result = mysqli_query($con, $sa);
    $s = "Insert into match_players1 (name,team_name)
            Select concat(first_name,last_name),team_name from players where team_name = '$batteamname'
            ";
    $result1 = mysqli_query($con, $s);
    $abc=$_SESSION['username'];
    $bowlingquery = "Select team_name from teams where username = '$abc'";
    $bowlingteam = mysqli_query($con,$bowlingquery);
    $bowlteamname=$bowlingteam->fetch_assoc();
    echo implode("", $bowlteamname);
    $bowlteamname_s = implode("", $bowlteamname);
    if($bowlteamname_s==$batteamname){
        $bowlteamname_s=$_SESSION['cteamname'];
        $_SESSION['bowlteamname'] = $bowlteamname_s;
    }
    else{
        $_SESSION['bowlteamname'] = $bowlteamname_s;
    }
    echo $bowlteamname_s;
    $sb = "Truncate Table match_players2";
    $result2 = mysqli_query($con, $sb);
    $sc =  "Insert into match_players2 (name,team_name)
            Select concat(first_name,last_name),team_name from players where team_name = '$bowlteamname_s'
            ";
    $result3 = mysqli_query($con, $sc);
    header('location:scorerlvl4.php');

 ?>
