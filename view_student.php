<!DOCTYPE html>

<?php

	$con=mysqli_connect("localhost","root","","pdms");

	if(mysqli_connect_errno())
	{
		echo"failed";
		mysqli_connect_error();
	}

?>

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
                        <li><a href="staff_logout.php">Log out</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	
	

 
							
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  
		  <div class="panel panel-success">
		  
			<div class="panel-heading">
			  <h3>view students</h3>
			</div>
			
			<div class="panel-body">
			 
			  <form id="form" action="view_student.php" name="myForm" method="post" enctype="multipart/form-data"  >
					
					
					<div class="row">
					
						<div class="col-sm-4">
							<b>1.</b>Select cgpa:
							<select class="form-control" name="cgpa" id="cgpa" required>
								<option value="">Select Cgpa</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="552828">10</option>
						
							</select>
						</div>
					
					
						<div class="col-sm-4">
							<b>2.</b>Select 12th Percentage:
							<select class="form-control" name="twelth_p" id="twelth_p" required>
								<option value="">Select 12th Percentage</option>
								<option value="50">50</option>
								<option value="55">55</option>
								<option value="60">60</option>
								<option value="65">65</option>
								<option value="70">70</option>
								<option value="75">75</option>
								<option value="80">80</option>
								<option value="85">85</option>
								<option value="90">90</option>
								<option value="100">100</option>
							</select>
						</div>
						
						<div class="col-sm-4">
							<b>3.</b>Select 10th Percentage:
							<select class="form-control" name="tenght_p" id="tenght_p" required>
								<option value="">Select 10th Percentage</option>
								<option value="50">50</option>
								<option value="55">55</option>
								<option value="60">60</option>
								<option value="65">65</option>
								<option value="70">70</option>
								<option value="75">75</option>
								<option value="80">80</option>
								<option value="85">85</option>
								<option value="90">90</option>
								<option value="100">100</option>
							</select>
						</div>
					</div>
					
					<br/><br/>
			  
					<div class="row">
						<div align="center">
							<button type="submit" class="btn btn-info btn-flat">SEARCH</button>
							
						</div>
					</div>
				</form>
			  
			</div>
			
		  </div>
		
		</div>
	  </div>
	</div>

	
	<div class="col-md-2"></div>
		<div class="col-md-12">
			<div class="panel panel-warning">
				<div class="panel-heading"><b>View students</b></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table bordered">
							<tr class="warning">
								<th>Sl.No</th>
								<th>Name</th>
								<th>USN</th>
								<th>Branch</th>
								<th>Email</th>
								<th>PhNo</th>
								<th>Address</th>
								<th>10th per</th>
								<th>12th per</th>
								<th>BE 1st SGPA </th>
								<th>BE 2nd SGPA</th>
								<th>BE 3rd SGPA </th>
								<th>BE 4th SGPA</th>
								<th>BE 5th SGPA </th>
								<th>BE 6th SGPA</th>
								<th>CGPA </th>
								<th>Percentage</th>
							</tr>
							
							<?php
															
			if(isset($_POST['cgpa']) and isset($_POST['twelth_p']) and isset($_POST['tenght_p']))
			{									
				
										  
				$cnt = 1;
				$qry = "select * from stud_details where cgpa>= '".$_POST['cgpa']."' and 12_per >= '".$_POST['twelth_p']."' and 10_per>= '".$_POST['tenght_p']."' ";
				$res = mysqli_query($con,$qry);
													
				while($result = mysqli_fetch_array($res))
				{
					echo'
						<tr>
							<td>'.$cnt.'</td>
							<td>'.$result[0].'</td>							
							<td>'.$result[1].'</td>
							<td>'.$result[2].'</td>	
							<td>'.$result[3].'</td>		
							<td>'.$result[4].'</td>
							<td>'.$result[5].'</td>
							<td>'.$result[6].'</td>
							<td>'.$result[7].'</td>
							<td>'.$result[8].'</td>
							<td>'.$result[9].'</td>
							<td>'.$result[10].'</td>
							<td>'.$result[11].'</td>
							<td>'.$result[12].'</td>
							<td>'.$result[13].'</td>	
							<td>'.$result[14].'</td>	
							<td>'.$result[15].'</td>	
							
						</tr>
							';
							$cnt = $cnt + 1;
				}
										
				if(mysqli_num_rows($res)== 0)
				{
					echo "<script>alert('No student details found !!!');</script>";
					echo "<script>window.location = 'view_student.php';</script>";
						
						
						
				}
			}
			
			else
			{
				$cnt = 1;
				$qry = "select * from stud_details";
				$res = mysqli_query($con,$qry);
													
				while($result = mysqli_fetch_array($res))
				{
					echo'
						<tr>
							<td>'.$cnt.'</td>
							<td>'.$result[0].'</td>							
							<td>'.$result[1].'</td>
							<td>'.$result[2].'</td>	
							<td>'.$result[3].'</td>		
							<td>'.$result[4].'</td>
							<td>'.$result[5].'</td>
							<td>'.$result[6].'</td>
							<td>'.$result[7].'</td>
							<td>'.$result[8].'</td>
							<td>'.$result[9].'</td>
							<td>'.$result[10].'</td>
							<td>'.$result[11].'</td>
							<td>'.$result[12].'</td>
							<td>'.$result[13].'</td>	
							<td>'.$result[14].'</td>	
							<td>'.$result[15].'</td>	
							
						</tr>
							';
							
							$cnt = $cnt + 1;
				}
			}
		?>	
		
						</table>
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