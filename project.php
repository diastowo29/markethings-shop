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
                    <a href="compro.php">
                        <i class="ti-user"></i>
                        <p>Company Profile</p>
                    </a>
                </li>
                <li>
                    <a href="newproject.php">
                        <i class="ti-view-list-alt"></i>
                        <p>New Project</p>
                    </a>
                </li>
                <li class="active">
                    <a href="project.php">
                        <i class="ti-text"></i>
                        <p>Project</p>
                    </a>
                </li>
                <li>
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
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Project List</h4>
                                <p class="category">All active projects</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Period Left</th>
                                        <th>PIC</th>
                                        <th>City</th>
                                        <th>Cancel</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>5</td>
                                            <td>Diastowo</td>
                                            <td>Bogor</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center" class="well">No Quotations..</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>7</td>
                                            <td>Nandityo</td>
                                            <td>Jakarta</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="well">
                                                <div class="col-lg-3 col-sm-6 col-xs-6" style="cursor: pointer;">
                                                    <div class="card">
                                                        <div class="content">
                                                            <div class="row" data-toggle="modal" data-target="#selectModal">
                                                                <!-- <div class="col-xs-12"> -->
                                                                    <!-- <div>PT. Sejahtera</div> -->
                                                                <!-- </div> -->
                                                                <div class="col-xs-5">
                                                                    <div class="icon-big icon-warning text-center" align="center">
                                                                        <i class="ti-server"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-7">
                                                                    <div class="numbers">
                                                                        <p>PT. Sejahtera</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="footer">
                                                                <hr />
                                                                <div class="stats" style="width: 100%;">
                                                                    <button type="submit" class="btn btn-info btn-fill" style="width: 100%;" data-toggle="modal" data-target="#myModal">Download</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-xs-6" style="cursor: pointer;">
                                                    <div class="card">
                                                        <div class="content">
                                                            <div class="row" data-toggle="modal" data-target="#selectModal">
                                                                <!-- <div class="col-xs-12"> -->
                                                                    <!-- <div>PT. Sejahtera</div> -->
                                                                <!-- </div> -->
                                                                <div class="col-xs-5">
                                                                    <div class="icon-big icon-warning text-center" align="center">
                                                                        <i class="ti-server"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-7">
                                                                    <div class="numbers">
                                                                        <p>PT. Makmur</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="footer">
                                                                <hr />
                                                                <div class="stats" style="width: 100%;">
                                                                    <button type="submit" class="btn btn-info btn-fill" style="width: 100%;" data-toggle="modal" data-target="#myModal">Download</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>2</td>
                                            <td>Pico</td>
                                            <td>Depok</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center" class="well">No Quotations..</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>8</td>
                                            <td>Reiza</td>
                                            <td>Bekasi</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center" class="well">No Quotations..</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>12</td>
                                            <td>Alvin</td>
                                            <td>Cibubur</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center" class="well">No Quotations..</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mason Porter</td>
                                            <td>3</td>
                                            <td>Diastowo</td>
                                            <td>Bogor</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center" class="well">No Quotations..</td>
                                        </tr>
                                    </tbody>
                                </table>

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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Download</h4>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PIC</label>
                                                <input type="text" class="form-control border-input" placeholder="Company" value="Pico Septa">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="081283947228">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control border-input" placeholder="Email" value="pico.septa@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Term Of Delivery</label>
                                                <input type="text" class="form-control border-input" placeholder="Term" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Download</button>
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

<!-- Modal -->
<div class="modal fade" id="selectModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload PO</h4>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PIC</label>
                                                <input type="text" class="form-control border-input" placeholder="Company" value="Pico Septa">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="081283947228">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Upload PO</button>
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

<!-- Modal -->
<div class="modal fade" id="cancelModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cancel Project</h4>
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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reason of Cancel</label>
                                                <textarea class="form-control border-input" rows="5" placeholder="Enter the reason of cancel" value="Pico Septa"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Cancel Project</button>
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
