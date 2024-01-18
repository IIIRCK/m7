<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>

                    <li>
                        <a  href="v_create.html"><i class="fa fa-user fa-3x"></i> Add Persona</a>
                    </li>
                    <li  >
                        <a  href="v_read.php"><i class="fa fa-table fa-3x"></i> View Personas</a>
                    </li>

                    <li  >
                        <a  class="active-menu" href="v_update.html"><i class="fa fa-dot-circle-o fa-3x"></i> Update Persona</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <?php
                include_once 'm.php';
                $id =  $_GET['id'];
                $d =  select_id($id);

                ?>
                <form role="form">
                    <div class="form-group">
                        <label class="control-label"  for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $d['name'] ?>">
                    </div>
                    <div class="form-group ">
                        <label class="control-label"  for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname"value="<?php echo $d['surname'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"  for="email">email</label>
                        <input type="text" class="form-control" id="email" value="<?php echo $d['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label"  for="tlf">tlf</label>
                        <input type="text" class="form-control" id="tlf" value="<?php echo $d['tlf'] ?>">
                    </div>
                    <img src="data:<?php echo $d['file_path']; ?>;base64,<?php echo base64_encode($d['file']); ?>" alt="" style="width: 100px">


                    <div class="form-group">
                        <label class="control-label"  for="img">img</label>
                        <input type="file" id="img" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </form>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
