<?php 

$connection = mysqli_connect("localhost","root","","db200");


$givenu = $_POST ["username"];
$givenp = $_POST ["password"];

$query = "SELECT * FROM studentinfo WHERE email='$givenu' AND reg='$givenp'";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());

$row =mysqli_fetch_array($result);

$dbu = $row['email'];
$dbp = $row['reg'];




?>




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
						<h1 class="title"></h1>
						<hr/>
					</div>

					<form action="attendancesheet.php" class="form-signin" method="post">


						<div >


							<?php

							if($dbu==$givenu && $dbp==$givenp){



							$query = "SELECT * FROM attendance WHERE reg='$givenp'";

							$sql = mysqli_query($connection,$query);

							echo "<table class=\"table\">";
							echo "<thead>";
							echo "<tr>";
							echo "<th>Class</th>";
							echo "<th>Count</th>";
							echo "</tr>";
							echo "</thead>";
							echo "<tbody>";

							while ($row = $sql->fetch_assoc()){

								echo "<tr>";

								echo "<td>{$row['coursename']}</td>";
								echo "<td>{$row['count']}</td>";

								echo "</tr>";




							}

							echo "<tbody>";

							echo "</table>";


								
							}

							else{

								echo "Username and Password combination is incorrect";

								header("Refresh:1; url=loginstudent.php");
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
v