<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PLACEMENT | REGISTER </title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
       

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="company.php">Company</a></li>
						<li><a href="view_student.php">View Student</a></li>
   						<li><a href="staff_logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	
	

   <br/><br/><br/>
	
	<div class="row">
		<div align="center">				
			<a href="add_company.php" class="btn btn-info btn-flat" role="button">Add Company</a>
			<a href="add_stud.php" class="btn btn-info btn-flat" role="button">Add student to company</a>
			<a href="view_placed_stud.php" class="btn btn-info btn-flat" role="button">View Placed Student</a>
		</div>
	</div>
	
	<br/><br/>
	
	<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-warning">
				<div class="panel-heading"><b>View Company</b></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table bordered">
							<tr class="warning">
								<th>Company ID</th>
								<th>Company Name</th>
								<th>Package</th>
								<th>CGPA</th>
								<th>12th Percentage</th>
								<th>10th Percentage</th>
								
							</tr>
							
							<?php
								include_once("db.php");
								$qry="select * from company";
								$res=mysqli_query($con,$qry);
								
								while($result=mysqli_fetch_array($res))
								{
									echo'
										<tr>
										
											<td>'.$result[0].'</td>
											<td>'.$result[1].'</td>
											<td>'.$result[2].'</td>
											<td>'.$result[3].'</td>
											<td>'.$result[4].'</td>
											<td>'.$result[5].'</td>
											
										</tr>';
								}
							?>
						</table>
					</div>
					
					<div class="row">
						<div align="center">
							<a href="upd_company.php" class="btn btn-info btn-flat" role="button">Update</a>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
    

	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>