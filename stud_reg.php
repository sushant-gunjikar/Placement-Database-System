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
				
                
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-success">
		  
			<div class="panel-heading">
			  <h3>Student Registration</h3>
			</div>
			
			<div class="panel-body">
			 
			  <form action="stud_con.php" name="myForm" method="post" enctype="multipart/form-data"  >
					
					
			  
					<div>
						<b>1.</b>Name:
						<input type="text" name="name" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>2.</b>USN :
						<input type="text" name="usn" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
							<b>3.</b>Branch:
							<select class="form-control" name="branch" required>
								<option value="">Select Your branch</option>
								<option value="CS">Computer Science & Engg.</option>
								<option value="ME">Mechanical Engg.</option>
								<option value="CE">Civil Engg.</option>
								<option value="EC">Electronics and Communication Engg.</option>
								<option value="EE">Electrical and Electronics engg.</option>
								<option value="CH">Chemical Engg.</option>
													
						    </select>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<div>
						<b>4.</b>User Name :
						<input type="text" name="uname" autofocus class="form-control" required />
							<br/>
					</div>
					
					<div>
						<b>5.</b>Password :
						<input type="password" name="pass" autofocus class="form-control" required />
							<br/>
					</div>
			  
					<div class="row">
						<div align="center">
							<button type="submit" class="btn btn-info btn-flat">submit</button>
							
						</div>
					</div>
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