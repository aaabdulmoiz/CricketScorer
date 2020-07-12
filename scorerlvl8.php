<?php
session_start();
    $con = mysqli_connect('localhost' , 'moiz', '123456');
    mysqli_select_db($con, 'cricketscorer');
    $bowl1=$_GET['name'];
    $_SESSION['bowl1']=$bowl1;
    echo $bowl1;
    $batting = $_SESSION['batteamname'];
    $bowling = $_SESSION['bowlteamname'];
    $actor = $_SESSION['username'];
    $matchs = "Insert into matches (match_date,batting_team,bowling_team, actor) values (CURDATE(),'$batting','$bowling','$actor')";
    mysqli_query($con, $matchs);
    $sb = "UPDATE match_players2 SET status = 'notout' ";
                mysqli_query($con, $sb);
    $s= "UPDATE match_players2 SET status = 'bowl'
        WHERE name = '$bowl1' ";
    mysqli_query($con, $s);
    $open1 = $_SESSION['open1'];
    $open2 = $_SESSION['open2'];
    $sc= "UPDATE match_players1 SET status = 'on'
        WHERE name = '$open1' ";
    mysqli_query($con, $sc);
    $sd= "UPDATE match_players1 SET status = 'on'
        WHERE name = '$open2' ";
    mysqli_query($con, $sd);
?>

    <!doctype html>
<html lang="en">
<head>
    <script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/mainScorer.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    CricScorer
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home2.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Stats</p>
                    </a>
                </li>
                <li class="active">
                    <a href="Scorer.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Scorer</p>
                    </a>
                </li>
                <li>
                    <a href="TeamMaker.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Add Team</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="home2.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <showcase id="showcase">
            <h1 class="cscore">
                <?php  echo $_SESSION['batteamname']; ?> <span class="bg">VS</span> <?php echo $_SESSION['bowlteamname']; ?>
            </h1>
            <h1 class="cscore">Total Overs <?php echo $_SESSION['overs']; ?> </h1>
            <h1 class="cscore"><input type="text" id="totalruns" value="0" style="color: black"> Runs in <input type="text" id="overs" value="0" style="color: black"> overs and <input type="text" id="balls" value="0" style="color: black">balls</h1>
            <h1 class="cscore dib">Batting: <?php echo $_SESSION['batteamname']; ?></h1>
            <table class=" cscore table dib">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Players</th>
                            <th colspan="2">Runs</th>
                            <th colspan="2">4s</th>
                            <th colspan="2">6s</th>
                            <th colspan="2">Balls</th>
                        </tr>
                    </thead>
                        <tr>
                            <td><?php echo $_SESSION['open1']; ?></td>
                            <td colspan="2"><input type="text" id="p1" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="4p1" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="6p1" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="bp1" value="0" style="color: black"></td>
                        </tr>
                        <tr>
                            <td><?php echo $_SESSION['open2'] ?></td>
                            <td colspan="2"><input type="text" id="p2" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="4p2" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="6p2" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="bp2" value="0" style="color: black"></td>
                        </tr>
            </table>
            <h1 class="cscore dib">Bowling: <?php echo $_SESSION['bowlteamname']; ?></h1>
             <table class=" cscore table dib">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Players</th>
                            <th colspan="2">Overs</th>
                            <th colspan="2">Runs</th>
                            <th colspan="2">Wickets</th>
                        </tr>
                    </thead>
                        <tr>
                            <td><?php echo $_SESSION['bowl1']; ?></td>
                            <td colspan="2"><input type="text" id="01" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="or1" value="0" style="color: black"></td>
                            <td colspan="2"><input type="text" id="ow1" value="0" style="color: black"></td>
                        </tr>
            </table>
            <h1 class="cscore">Press Button to Score</h1>

            <div class="abc cscore">
                <button class="abc btn btn-primary" id="zero" onclick="buttonClick(0);" >0</button>
                <button class="abc btn btn-primary" id="one" onclick="buttonClick(1);">1</button>
                <button class="abc btn btn-primary" id="two" onclick="buttonClick(2);">2</button>
                <button class="abc btn btn-primary" id="three" onclick="buttonClick(3);">3</button>
                <button class="abc btn btn-primary" id="four" onclick="buttonClick(4);">4</button>
                <button class="abc btn btn-primary" id="five" onclick="buttonClick(5);">5</button>
                <button class="abc btn btn-primary" id="six" onclick="buttonClick(6);">6</button>
                <button class="abc btn btn-primary" id="wicket" onclick="wicket();">W</button>
            </div>
        </showcase>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="home2.php">CricScorer</a>, make your life easy
                </p>
            </div>
        </footer>

    </div>
</div>



</body>
    <script type="text/javascript">
        var i = 0; var b=0; var abc = true; var fourp1=0; var fourp2=0; var sixp1=0; var sixp2=0; var bp1=0; var bp2=0;
        var totalruns=0; var totalballs=0; var overs; var cball=0; var o1=0; var or=0; var ow=0;
    function buttonClick() {
        totalballs=totalballs+1;
        overs=totalballs/6;
        overs=Math.trunc(overs);
        cball=totalballs%6;
        document.getElementById('overs').value=overs;
        document.getElementById('balls').value=cball;
        if(abc==true){
            document.getElementById('')
        if(arguments[0]%2==1){
            bp1++;
            document.getElementById('bp1').value = bp1;
            i=i+arguments[0];
            totalruns= totalruns+arguments[0];
            document.getElementById('totalruns').value=totalruns;
            document.getElementById('p1').value = i;
            abc=false;
        }
        else if(arguments[0]%2==0){
            bp1++;
            document.getElementById('bp1').value = bp1;
            i=i+arguments[0];
            totalruns= totalruns+arguments[0];
            document.getElementById('totalruns').value=totalruns;
            document.getElementById('p1').value = i;
            if(arguments[0]==4){
                fourp1++;
                document.getElementById('4p1').value = fourp1;
            }
            if(arguments[0]==6){
                sixp1++;
                document.getElementById('6p1').value = sixp1
            }
        }
        }
        else{
        if(arguments[0]%2==1){
            bp2++;
            document.getElementById('bp2').value = bp2;
            b=b+arguments[0];
            totalruns= totalruns+arguments[0];
            document.getElementById('totalruns').value=totalruns;
            document.getElementById('p2').value = b;
            abc=true;
        }
        else if(arguments[0]%2==0){
            bp2++;
            document.getElementById('bp2').value = bp2;
            b=b+arguments[0];
            totalruns= totalruns+arguments[0];
            document.getElementById('totalruns').value=totalruns;
            document.getElementById('p2').value = b;
            if(arguments[0]==4){
                fourp2++;
                document.getElementById('4p2').value = fourp2;
            }
            if(arguments[0]==6){
                sixp2++;
                document.getElementById('6p2').value = sixp2
            }
            o1=o1+1;
            document.getElementById('o1').value = o1;

        }
      }
      if(totalballs%6==0){
        location.href = "scorerlvlcover.php?overs="+overs+"&totalballs="+totalballs+"&i="+i+"&b="+b+"&abc="+abc+"&fourp1="+fourp1+"&fourp2="+fourp2+"&sixp1="+sixp1+"&sixp2="+sixp2+"&bp1="+bp1+"&bp2="+bp2+"&totalruns="+totalruns+"&cball="+cball;
      }

    }

    function wicket(){

        location.href="scorerlvl9.php?overs="+overs+"&totalballs="+totalballs+"&i="+i+"&b="+b+"&abc="+abc+"&fourp1="+fourp1+"&fourp2="+fourp2+"&sixp1="+sixp1+"&sixp2="+sixp2+"&bp1="+bp1+"&bp2="+bp2+"&totalruns="+totalruns+"&cball="+cball;
    }
    </script>


    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Our Scorer</b> - a beautiful Scorer for every cricket enthusiast."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>
