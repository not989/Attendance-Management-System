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

				<form action="checkstudent2.php" method="post" class="form-sign-in">
					
							<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Report</h1>
	               		<hr />
	               	</div>
	            </div> 


        	<div class="col-xs-8 col-xs-offset-2">
        				<label for="inputEmail" >Reg No</label>
  <input type="number" id="inputEmail" name="reg"  class="form-control" placeholder="Reg" required autofocus>
        	</div>


        		<br><br><br><br><br><br><br>

			<div class="col-xs-4 col-xs-offset-4">
					<input class="btn btn-lg btn-login btn-block" type="submit" value="View">
				</div>

				</form>
				

			</div>
		

	
	    </header>



	


	</body>

</html>
