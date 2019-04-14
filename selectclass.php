


<!doctype html>

<html>


<head>
	<title>Project 200</title>

	

	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bs/js/bootstrap.js"></script>
	<script type="text/javascript" src="bs/js/npm.js"></script>


</head>

<body>

	

	<header>

		<nav class="navbar navbar-default">

			<h1 class="text-center">ATTENDANCE MANAGEMENT SYSTEM</h1>

			<div class="navbar-wrapper">
				<div class="container">

					<nav class="navbar navbar-default navbar-static-top">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

							</div>
							<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li><a href="home.php">Home</a>
									</li>
									<li><a href="about.php">About</a>
									</li>
									<li><a href="contact.php">Contact</a>
									</li>
									<li><a href="home.php">Logout</a>
									</li>

								</ul>
							</div>


						</div>
					</nav>

				</div>
			</div>


		</nav> 




		<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h1 class="title">Select Class</h1>
						<hr/>
					</div>

					<form  class="form-signin" method="post">


						<div class="panel-body text-center">


					


							<?php

							$connection = mysqli_connect("localhost","root","","db200");									

							$query = "SELECT coursename FROM class";

							$sql = mysqli_query($connection,$query);

							while ($row = $sql->fetch_assoc()){

								echo "<b>{$row['coursename']}</b>";
								echo "<br>";

								$temp = $row['coursename'];

								echo "<button type=\"submit\" name=\"submit\" formaction=\"attendancesheet.php\" value=\"$temp\" class=\"btn btn-primary\">Attendance</button> ";
								echo "      ";
								echo "<button type=\"submit\" name=\"submit\" formaction=\"status.php\" value=\"$temp\" class=\"btn btn-primary\">Status</button> ";

								echo "<hr/>";

							}

							?>



						</div>



					</form>


				</div> 

			</div>
		</div>




















	</header>





</body>

</html>
