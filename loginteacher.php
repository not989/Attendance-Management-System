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

				 <form action="loginteacher2.php" class="form-signin" method="post">
        			<h2 class="form-signin-heading">Sign in</h2>

        			
        			<div class="col-xs-8">
        				<label for="inputEmail" >Name</label>
       				 <input type="username" id="inputEmail" class="form-control" name="name" placeholder="Name" required autofocus>
        			</div>
        			<div class="col-xs-8">
        			<label for="inputPassword" >Password</label>
        			<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        			<div>
        			<div class="checkbox">
          				<label>
            			<input type="checkbox" value="remember-me"> Remember me
          				</label>
        			</div>

        			<div>

        				<button type="submit" class="btn btn-default btn-lg">SignIn</button>

        				
        			</div>

      			</form>

			</div>

		

	
	    </header>



	

	</body>

</html>
