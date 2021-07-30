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
		function calc_cgpa()
		{
			var a=document.getElementById("first_sgpa").value;
			var b=document.getElementById("second_sgpa").value;
			var c=document.getElementById("third_sgpa").value;
			var d=document.getElementById("fourth_sgpa").value;
			var e=document.getElementById("fifth_sgpa").value;
			var f=document.getElementById("sixth_sgpa").value;
			
			if(a=="")
			{
				a=0;
			}
			if(b=="")
			{
				b=0;
			}
			if(c=="")
			{
				c=0;
			}
			if(d=="")
			{
				d=0;
			}
			if(e=="")
			{
				e=0;
			}
			if(f=="")
			{
				f=0;
			}
			
			var amt=((parseInt(a)*24) + (parseInt(b)*24) + (parseInt(c)*28) + (parseInt(d)*28) + (parseInt(e)*28) + (parseInt(f)*28))/160;
			document.getElementById('cgpa').value=amt;
			
			var h=document.getElementById("cgpa").value;
			if(h=="")
			{
				h=0;
			}
			var percentage=((h)-0.75)*10;
			document.getElementById('per').value=percentage;
			
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
                       
                        <li><a href="student_logout.php">Log Out</a></li>                        
                    </ul>
                </div>
                
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

	
	<br/><br/><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">		
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3>Student Details</h3>
					</div>
			
					<div class="panel-body">
						<form action="ins_stud_details.php" name="myForm" method="post">
							<?php
								include_once("db.php");
								session_start();
									$qry="select * from reg_stud where username='".$_SESSION['SESS']."'";
									$res=mysqli_query($con,$qry);
					
									while($result=mysqli_fetch_array($res))
									{
										echo'
											<div class="col-md-12">
												<b>1.</b>Name :
												<input type="text" readonly name="name" value="'.$result[0].'" required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>2.</b>Usn :
												<input type="text" readonly name="usn" value="'.$result[1].'" required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>3.</b>branch :
												<input type="text" readonly name="branch" value="'.$result[2].'" required class="form-control" />
												<br/>
											</div>
										 
											
											<div class="col-md-12">
												<b>4.</b>Email ID :
												<input type="email" required name="email"  required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>5.</b>Phone number :
												<input type="number" required name="phno"  required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>6.</b>Address :
												<input type="text" required name="address"  required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>7.</b>10th percentage :
												<input type="text" required name="tenght_p"  required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>8.</b>12th percentage :
												<input type="text" required name="twelth_p"  required class="form-control" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>9.</b>BE 1st sem SGPA:
												<input type="text" required name="first_sgpa" id="first_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>10.</b>BE 2nd sem SGPA:
												<input type="text" required name="second_sgpa" id="second_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>11.</b>BE 3rd sem SGPA:
												<input type="text" required name="third_sgpa" id="third_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>12.</b>BE 4th sem SGPA:
												<input type="text" required name="fourth_sgpa" id="fourth_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>13.</b>BE 5st sem SGPA:
												<input type="text" required name="fifth_sgpa" id="fifth_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>14.</b>BE 6st sem SGPA:
												<input type="text" required name="sixth_sgpa" id="sixth_sgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>15</b>CGPA:
												<input type="text" required name="cgpa" id="cgpa" required class="form-control" onkeyup="calc_cgpa()" />
												<br/>
											</div>
											
											<div class="col-md-12">
												<b>16.</b>Total Percentage :
												<input type="text" required name="per" id="per" required class="form-control" onkeyup="calc_cgpa()" />
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