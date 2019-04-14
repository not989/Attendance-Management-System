<!doctype html>

<html>


		
	</style>

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

			<form action="addteacher2.php" class="form-signin" method="post">

			<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Add Teacher</h1>
	               		<hr />
	               	</div>
	            </div> 

		


			<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputname" >Name</label>
       				 <input type="username" name="name" id="inputname" class="form-control" placeholder="Name" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
					<label for="post" >Post</label>

				<select class="form-control" name="post" id="post">
					<option value="Professor">Professor</option>
					<option value="Associate Professor">Associate Professor</option>
					<option value="Assistant Professor">Assistant Professor</option>
					<option value="Lecturer">Lecturer</option>
				</select>

				</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >Email address</label>
       				 <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        	</div>

        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="mobile" >Mobile</label>
       				 <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile" required autofocus>
        	</div>


        	<br><br><br><br><br><br><br><br><br><br>
        	<br><br><br>


	

				<div class="col-xs-4 col-xs-offset-4">
					<button type="submit" name="submit" class="btn btn-default btn-lg">ADD</button>
				</div>

			</form>
				

			</div>
		

	
	    </header>



	


	</body>

</html>
