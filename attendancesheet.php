<?php 

$connection = mysqli_connect("localhost","root","","db200");

$name = $_POST["submit"];


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
						<h1 class="title">Attendance Sheet</h1>
						<hr/>
					</div>

					<form action="attendancesheet2.php" class="form-signin" method="get">

						<div class="panel-body text-center">


							<?php




							$name = $_POST["submit"];

							$data["course"]=$name;
							file_put_contents("saveddata.txt", serialize($data));



							$query = " SELECT semester FROM class WHERE coursename='$name'";

							$sql = mysqli_query($connection,$query);

							while ($row = $sql->fetch_assoc()){

								$temp = $row['semester'];


							}

							$query2 = " SELECT reg FROM studentinfo WHERE semester='$temp'";

							$sql = mysqli_query($connection,$query2);



							while ($row = $sql->fetch_assoc()){



								echo "<b>{$row['reg']}</b>";
								echo "<br><br>";

								$temp = $row['reg'];
					
		echo "<input type=\"checkbox\" name=\"con[]\" value=\"1\"> Present<br>";
		echo "<br>";
		echo "<input type=\"checkbox\" name=\"con[]\" value=\"0\"> Absent<br>";


		echo "<hr/>";

							}


							?>

						</div>

						<div class="col-xs-4 col-xs-offset-4">
							<input class="btn btn-lg btn-login btn-block" type="submit" value="submit">
						</div>




					</form>


				</div> 

			</div>
		</div>




















	</header>





</body>

</html>
