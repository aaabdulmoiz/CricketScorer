
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


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


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
                <a href="home2.php" class="simple-text">
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
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
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
                <li class="active">
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
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
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

        <div>
            <div class="container">
                <div class="spacin">
                <form action="createTeam.php" method="post">
                    <label for="Team A">Team Name</label>
                    <div class="form-group">
                        <input type="text" name="team1" class="form-control" placeholder="Team 1" required>
                    </div>
                    <label for="Code A">Team Code</label>
                    <div class="form-group">
                        <input type="password" name="teamcode" class="form-control" placeholder="****" required>
                    </div>
                    <label for="Player Names">Player Names</label>
                    <div class="form-group">
                        <input type="text" name="p1f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p1l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p2f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p2l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p3f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p3l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p4f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p4l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p5f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p5l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p6f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p6l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p7f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p7l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p8f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p8l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p9f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p9l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p10f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p10l" class="form-control" placeholder="LastName" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="p11f" class="form-control" placeholder="FirstName" required>
                        <input type="text" name="p11l" class="form-control" placeholder="LastName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Team</button>
                </form>
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
