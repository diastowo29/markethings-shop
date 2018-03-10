<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Markethings
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="project-hist.php">
                        <i class="ti-user"></i>
                        <p>Project History</p>
                    </a>
                </li>
                <li>
                    <a href="newproject.php">
                        <i class="ti-view-list-alt"></i>
                        <p>New Project</p>
                    </a>
                </li>
                <li>
                    <a href="project.php">
                        <i class="ti-text"></i>
                        <p>Project</p>
                    </a>
                </li>
                <li class="active">
                    <a href="poconfirmation.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>PO Confirmation</p>
                    </a>
                </li>
                <li>
                    <a href="complain.php">
                        <i class="ti-map"></i>
                        <p>Complain</p>
                    </a>
                </li>
                <li>
                    <a href="helpdesk.php">
                        <i class="ti-bell"></i>
                        <p>Help Desk</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">

        <?php include 'top-nav-bar.php';?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Project List</h4>
                                <!-- <p class="category">All active projects</p> -->
                            </div>
                            <div class="content">
                                <div class="row">
                                    <hr class="between col-md-12 col-xs-12" style="border: 3px solid #f4f3ef;">
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                        <div class="col-md-3 col-xs-3">
                                            <label><b>Project</b>: Papan Tulis</label>
                                        </div>
                                        <div class="col-md-9 col-xs-9">
                                            <div class="col-md-12">
                                                <label><b>8udvxsdf8w9</b></label>
                                            </div>
                                            <div class="col-md-12">
                                                <label><b>Date</b>: 30 Apr 2017 | <b>Total</b>: 40 Item</label>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="col-md-3 btn btn-info btn-fill" type="submit" style="margin-right: 10px;">
                                                    Download
                                                </button>
                                                <button class="col-md-3 btn btn-select btn-fill"  data-toggle="modal" data-target="#detailModal" type="submit" style="margin-right: 10px;">
                                                    Detail
                                                </button>
                                                <button class="col-md-3 btn btn-warning btn-fill" type="submit">
                                                    Confirm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="col-md-12 col-xs-12 between" style="border: 3px solid #f4f3ef;">
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                        <div class="col-md-3 col-xs-3">
                                            <label><b>Project</b>: Penggorengan Panas</label>
                                        </div>
                                        <div class="col-md-9 col-xs-9">
                                            <div class="col-md-12">
                                                <label><b>98e09f8w0r3</b></label>
                                            </div>
                                            <div class="col-md-12">
                                                <label><b>Date</b>: 13 Jul 2017 | <b>Total</b>: 8 Item</label>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="col-md-3 btn btn-info btn-fill" type="submit" style="margin-right: 10px;">
                                                    Download
                                                </button>
                                                <button class="col-md-3 btn btn-select btn-fill"  data-toggle="modal" data-target="#detailModal" type="submit" style="margin-right: 10px;">
                                                    Detail
                                                </button>
                                                <button class="col-md-3 btn btn-warning btn-fill" type="submit">
                                                    Confirm
                                                </button>
                                            </div>
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
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail PO</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <!-- <h4 class="title">Project Details</h4> -->
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div></div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PIC</label>
                                                <input type="text" class="form-control border-input" placeholder="PIC Name" value="Pico Septa">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control border-input" placeholder="Phone Number" value="081283947228">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control border-input" placeholder="Email Address" value="diastowo@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Term of Delivery</label>
                                                <input type="text" class="form-control border-input" placeholder="Term of delivery" value="Something awesome">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
