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
	<script>
		function callme()
		{
			
			var a=document.getElementById('cid').value;
			window.location="upd_company.php?b="+a;
		
		}	
	</script>
	
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
	
	
	
	<br/><br/>
	
	<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-warning">
				<div class="panel-heading"><b>Update Company Details</b></div>
				<div class="panel-body">
					
					<form action="ins_upd_company.php" name="myForm" method="post">
						<div class="col-md-4"></div>
						<div class="col-md-12">
							<b>1.</b>Company ID:
								<input type="text" id="cid" value="<?php if(isset($_GET['b'])) {echo $_GET['b'];} ?>" name="cid" autofocus required class="form-control" />
										<br/>
						</div>						

						<div class="col-md-8">
							<br><a onclick="callme()" class="btn btn-info btn-flat">Search</a>
						</div>
						
						<?php
							include_once("db.php");
							if(isset($_GET['b']))
							{
								$qry = "select * from company where cid = '".$_GET['b']."'";
								$res = mysqli_query($con,$qry);
								
								if($result = (mysqli_fetch_array($res)))
								{	
									
									echo'
									
										
										<div class="col-md-12">
											<b>1.</b>Company ID.:
											<input type="text" readonly name="cid" value="'.$result[0].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>2.</b>Company Name:
											<input type="text"  name="cname" readonly value="'.$result[1].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>3.</b>Package:
											<input type="text"  name="package"  value="'.$result[2].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>4.</b>CGPA:
											<input type="number"  name="cgpa"  value="'.$result[3].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>5.</b>12th Percentage:
											<input type="number"  name="twelth_p"  value="'.$result[4].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="col-md-12">
											<b>6.</b>10thj Percentage:
											<input type="number"  name="tenth_p"  value="'.$result[5].'" required class="form-control" />
											<br/>
										</div>
										
										<div class="row">
											<div class="col-xs-12">
												<div align="center">
													<button type="submit" class="btn btn-info btn-flat">submit</button>
												</div>
											</div>
										</div>';
								}
								else
								{
									echo "<script>alert('Company Id not exist');</script>";
									echo "<script>window.location = 'upd_company.php';</script>";
								}
							}
						?>
						
							
				</form>
					
					
					
					
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