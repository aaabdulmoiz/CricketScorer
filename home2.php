<?php
    session_start();
    $con = mysqli_connect('localhost' , 'moiz', '123456');
    mysqli_select_db($con, 'cricketscorer');
    $name=$_SESSION['username'];
    $ts = mysqli_query($con, "Select team_name from teams where username='$name'");
    $num=mysqli_num_rows($ts);
    if($num==1){
    $tsa=$ts->fetch_assoc();
    $team = implode("", $tsa);
    $_SESSION['team']=$team;
    $wons=mysqli_query($con, "Select matches_won from teams where username='$name'");
    $won=$wons->fetch_assoc();
    $wonint = implode("", $won);
    $wonint = (int)$wonint;
    $_SESSION['won']=$wonint;
    $losts=mysqli_query($con, "Select matches_lost from teams where username='$name'");
    $lost=$losts->fetch_assoc();
    $lostint = implode("", $lost);
    $lostint = (int)$lostint;
    $_SESSION['lost']=$lostint;
    $draws=mysqli_query($con, "Select matches_draw from teams where username='$name'");
    $draw=$draws->fetch_assoc();
    $drawint = implode("", $draw);
    $drawint = (int)$drawint;
    $_SESSION['draw']=$drawint;
    $ts = mysqli_query($con, "Select team_name from teams where username='$name'");
    $tsa=$ts->fetch_assoc();
    $team = implode("", $tsa);
    $_SESSION['team']=$team;
    $ps= mysqli_query($con,"Select last_name from players where team_name='$team'");
    $players=$ps->fetch_assoc();
    $p1 = implode("", $players);
    $_SESSION['p1']=$p1;

    $runp1 = mysqli_query($con,"Select runs from players where last_name='$p1'");
    $runp = $runp1->fetch_assoc();
    $runsp1= implode("", $runp);
    $runsp1= (int)$runsp1;
    $_SESSION['p1runs']=$runsp1;
    $players=$ps->fetch_assoc();
    $p2 = implode("", $players);
    $_SESSION['p2']=$p2;

    $runp2 = mysqli_query($con,"Select runs from players where last_name='$p2'");
    $runp = $runp2->fetch_assoc();
    $runsp2= implode("", $runp);
    $runsp2= (int)$runsp2;
    $_SESSION['p2runs']=$runsp2;
    $players=$ps->fetch_assoc();
    $p3 = implode("", $players);
    $_SESSION['p3']=$p3;

    $runp3 = mysqli_query($con,"Select runs from players where last_name='$p3'");
    $runp = $runp3->fetch_assoc();
    $runsp3= implode("", $runp);
    $runsp3= (int)$runsp3;
    $_SESSION['p3runs']=$runsp3;
    $players=$ps->fetch_assoc();
    $p4 = implode("", $players);
    $_SESSION['p4']=$p4;

    $runp4 = mysqli_query($con,"Select runs from players where last_name='$p4'");
    $runp = $runp4->fetch_assoc();
    $runsp4= implode("", $runp);
    $runsp4= (int)$runsp4;
    $_SESSION['p4runs']=$runsp4;
    $players=$ps->fetch_assoc();
    $p5 = implode("", $players);
    $_SESSION['p5']=$p5;

    $runp5 = mysqli_query($con,"Select runs from players where last_name='$p5'");
    $runp = $runp5->fetch_assoc();
    $runsp5= implode("", $runp);
    $runsp5= (int)$runsp5;
    $_SESSION['p5runs']=$runsp5;
    $players=$ps->fetch_assoc();
    $p6 = implode("", $players);
    $_SESSION['p6']=$p6;

    $runp6 = mysqli_query($con,"Select runs from players where last_name='$p6'");
    $runp = $runp6->fetch_assoc();
    $runsp6= implode("", $runp);
    $runsp6= (int)$runsp6;
    $_SESSION['p6runs']=$runsp6;
    $players=$ps->fetch_assoc();
    $p7 = implode("", $players);
    $_SESSION['p7']=$p7;

    $runp7 = mysqli_query($con,"Select runs from players where last_name='$p7'");
    $runp = $runp7->fetch_assoc();
    $runsp7= implode("", $runp);
    $runsp7= (int)$runsp7;
    $_SESSION['p7runs']=$runsp7;
    $players=$ps->fetch_assoc();
    $p8 = implode("", $players);
    $_SESSION['p8']=$p8;

    $runp8 = mysqli_query($con,"Select runs from players where last_name='$p8'");
    $runp = $runp8->fetch_assoc();
    $runsp8= implode("", $runp);
    $runsp8= (int)$runsp8;
    $_SESSION['p8runs']=$runsp8;
    $players=$ps->fetch_assoc();
    $p9 = implode("", $players);
    $_SESSION['p9']=$p9;

    $runp9 = mysqli_query($con,"Select runs from players where last_name='$p9'");
    $runp = $runp9->fetch_assoc();
    $runsp9= implode("", $runp);
    $runsp9= (int)$runsp9;
    $_SESSION['p9runs']=$runsp9;
    $players=$ps->fetch_assoc();
    $p10 = implode("", $players);
    $_SESSION['p10']=$p10;

    $runp10 = mysqli_query($con,"Select runs from players where last_name='$p10'");
    $runp = $runp10->fetch_assoc();
    $runsp10= implode("", $runp);
    $runsp10= (int)$runsp10;
    $_SESSION['p10runs']=$runsp10;
    $players=$ps->fetch_assoc();
    $p11 = implode("", $players);
    $_SESSION['p11']=$p11;

    $runp11 = mysqli_query($con,"Select runs from players where last_name='$p11'");
    $runp = $runp11->fetch_assoc();
    $runsp11= implode("", $runp);
    $runsp11= (int)$runsp11;
    $_SESSION['p11runs']=$runsp11;
}
else{

}


     ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  Charts Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js" type="text/javascript">
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
                <a href="home2.php" class="simple-text">
                    CricScorer
                </a>
            </div>

            <ul class="nav">
                <li class="active">
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
                <li>
                    <a href="Scorer.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Scorer</p>
                    </a>
                </li>
                <li>
                    <a href="canMakeTeam.php">
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

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">UserName: <?php echo $_SESSION['username']; ?></a></li>
                                <li><a href="#">TeamName: <?php echo $_SESSION['team']; ?></a></li>
                                <li><a href="#">Matches Won: <?php echo $_SESSION['won']; ?></a></li>
                                <li><a href="#">Matches Lost: <?php echo $_SESSION['lost']; ?></a></li>
                                <li><a href="#">Win Ratio: <?php ($_SESSION['won'])/(($_SESSION['won'])+($_SESSION['lost'])+($_SESSION['draw'])) ?></a></li>
                              </ul>
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card">
                        <canvas id="pieChart"></canvas>
                            <script>
                            //pie
                                var ctxP = document.getElementById("pieChart").getContext('2d');
                                ctxP.height = 200;
                                var myPieChart = new Chart(ctxP, {
                                type: 'pie',
                                data: {
                                labels: ["Lost", "Won", "Draw"],
                                datasets: [{
                                data: [<?php echo $_SESSION['lost'];?>, <?php echo $_SESSION['won'];?>, <?php echo $_SESSION['draw'];?>],
                                backgroundColor: ["#F7464A", "#46BFBD", "#4D5360"],
                                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#616774"]
                                }]
                                },
                                options: { maintainAspectRatio: false,
                                responsive: true
                                }
                                });
                            </script>
                            </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <canvas id="myChart" width="400" height="400"></canvas>
                                <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['<?php echo($_SESSION['p1']); ?>', '<?php echo($_SESSION['p2']); ?>', '<?php echo($_SESSION['p3']); ?>', '<?php echo($_SESSION['p4']); ?>', '<?php echo($_SESSION['p5']); ?>', '<?php echo($_SESSION['p6']); ?>', '<?php echo($_SESSION['p7']); ?>', '<?php echo($_SESSION['p8']); ?>', '<?php echo($_SESSION['p9']); ?>', '<?php echo($_SESSION['p10']); ?>', '<?php echo($_SESSION['p11']); ?>'],
                                        datasets: [{
                                            label: '# of Runs',
                                            data: [<?php echo $_SESSION['p1runs']; ?>, <?php echo $_SESSION['p2runs']; ?>, <?php echo $_SESSION['p3runs']; ?>, <?php echo $_SESSION['p4runs']; ?>, <?php echo $_SESSION['p5runs']; ?>, <?php echo $_SESSION['p6runs']; ?>,<?php echo $_SESSION['p7runs']; ?>, <?php echo $_SESSION['p8runs']; ?>, <?php echo $_SESSION['p9runs']; ?>, <?php echo $_SESSION['p10runs']; ?>, <?php echo $_SESSION['p11runs']; ?>],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: { maintainAspectRatio: false,
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                                </script>
                        </div>
                    </div>
                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
