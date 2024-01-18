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
                        <a class="active-menu" href="v_read.html"><i class="fa fa-table fa-3x"></i> View Personas</a>
                    </li>


                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Table</h2>
                        <h5></h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-5 mb-3 clearfix">
                                    <h2 class="pull-left">Table personas</h2>
                                    <a href="v_create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Persona</a>
                                </div>
                                <?php
                                // Include config file
                                require_once "./c.php";
                                require_once "./m.php";

                                $cnx = connect();
                                // Attempt select query execution
                                $sql = "SELECT * FROM persona";
                                if($result = mysqli_query($cnx, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                        echo '<table class="table table-bordered table-striped">';
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>name</th>";
                                        echo "<th>surname</th>";
                                        echo "<th>email</th>";
                                        echo "<th>tlf</th>";
                                        echo "<th>file_type</th>";
                                        echo "<th>Action</th>";
                                        echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['surname'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['tlf'] . "</td>";
                                            ?>
                                            <td> <img src="data:<?php echo $row['file_path']; ?>;base64,<?php echo base64_encode($row['file']); ?>" alt="" style="width: 75px"></td>
                                            <?php
                                            echo "<td>" . $row['file_path'] . "</td>";
                                            echo "<td>";
                                            echo '<a href="v_update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="v_delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span>delete</a>';

                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                        echo "</table>";
                                        // Free result set
                                        mysqli_free_result($result);
                                    } else{
                                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                    }
                                } else{
                                    echo "Oops! Something went wrong. Please try again later.";
                                }

                                mysqli_close($cnx);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

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
    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Handle the response here
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "https://localhost/c.php", true);
        xhttp.send();

    </script>
   
</body>
</html>
