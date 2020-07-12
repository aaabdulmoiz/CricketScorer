<?php
    session_start();
    $con = mysqli_connect('localhost' , 'moiz', '123456');
    mysqli_select_db($con, 'cricketscorer');
    $overs=$_GET['overs'];
    $totalballs=$_GET['totalballs'];
    $i=$_GET['i'];
    $b=$_GET['b'];
    $abc=$_GET['abc'];
    $fourp1=$_GET['fourp1'];
    $fourp2=$_GET['fourp2'];
    $sixp1=$_GET['sixp1'];
    $sixp2=$_GET['sixp2'];
    $bp1=$_GET['bp1'];
    $bp2=$_GET['bp2'];
    $totalruns=$_GET['totalruns'];
    $cball=$_GET['cball'];
    if($abc=='true'){
        $name=$_SESSION['open1'];
        $s="Update match_players1 SET runs='$i' , balls='$bp1' , status='out' where name='$name'";
        mysqli_query($con, $s);
        header("location:scorerlvl10.php?overs=$overs&totalballs=$totalballs&b=$b&abc=$abc&fourp2=$fourp2&sixp2=$sixp2&bp2=$bp2&totalruns=$totalruns+&cball=$cball");
    }
    else{
        $name=$_SESSION['open2'];
        $s="Update match_players1 SET runs='$b' , balls='$bp2' , status='out' where name='$name'";
        mysqli_query($con, $s);
        header("location:scorerlvl10.php?overs=$overs&totalballs=$totalballs&i=$i&abc=$abc&fourp1=$fourp1&sixp1=$sixp1&bp1=$bp1&totalruns=$totalruns&cball=$cball");
    }
 ?>

