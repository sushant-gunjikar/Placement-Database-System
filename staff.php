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
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3>Staff Details</h3>
					</div>
			
					<div class="panel-body">
						<form action="" name="myForm" method="post">
							<?php
								include_once("db.php");
								session_start();
									$qry="select * from reg_staff where username='".$_SESSION['SESS']."'";
									$res=mysqli_query($con,$qry);
					
									while($result=mysqli_fetch_array($res))
									{
										echo'
											<div class="col-md-12">
												<b>1.</b>staff_id :
												<input type="text" readonly name="staff_id" value="'.$result[0].'" required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>2.</b>Name :
												<input type="text" readonly name="name" value="'.$result[1].'" required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>3.</b>User Name :
												<input type="text"  name="uname" value="'.$result[2].'" readonly required class="form-control" />
												<br/>
											</div>
										 
											
											<div class="col-md-12">
												<b>4.</b>Password :
												<input type="text" required name="password" readonly  value="'.$result[3].'" required class="form-control" />
												<br/>
											</div>
											
											
											
											';
									}
					
							?>	
						</form>
				
					</div>	
				</div>
			
			</div>
		</div>
	</div>
   
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>