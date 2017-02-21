<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Titcombe college Egbe</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> TCE</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="products.html">Products</a>
                    </li>
                    <li>
                        <a href="Alumni.html">Alumni</a>
                    </li>
                    <li class="active">
                        <a href="#">Contact</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Engage</a></li>
							<li><a href="#">Pontificate</a></li>
							<li><a href="#">Synergize</a></li>
						</ul>
					</li>    
                </ul>

				<!-- Search -->
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature">
		<div class="container">
		
			<div id="feature-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#feature-carousel" data-slide-to="1"></li>
					<li data-target="#feature-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="image/002.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3 style="color:white">AMINISTRATIVE BLOCK</h3>
							
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="image/002.jpg" alt="">
						</a>
						<div class="carousel-caption">
							<h3 style="color:white" >ADMIN BLOCK</h3>
							<!--<p>Holistically pontificate installed base portals after maintainable products.</p>-->
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="image/001.jpg" alt="main gate">
						</a>
						<div class="carousel-caption">
							<h3 style="color:white"> MAIN GATE </h3>
							<!--<p>Holistically pontificate installed base portals after maintainable products.</p>-->
						</div>
					</div>			  
				</div>
				<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</div>


<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-3">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Facilities</h1>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">Auditorium</a>
					<a href="#" class="list-group-item">High Capacity Hall <span class="badge">New</span></a>
					<a href="#" class="list-group-item">examination Center</a>
					<a href="#" class="list-group-item">Recreational Center</a>
					<a href="#" class="list-group-item">Hostels</a>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Motto</h1>
				</div>

				<div class="panel-body">
					<p>Learn and Worship.</p>
					<p><button class="btn btn-default">Engage</button></p>
				</div>
			</div>
		
		</div><!--/Left Column-->
  
  
		<!-- Center Column -->
		<div class="col-md-6">
		<h3>Contact US</h3>
<form id="contact_form" action="formmail.php" method="POST" enctype="multipart/form-data" name="myemailform">
	<div class=" row">
		<label for="name"> Enter Your Name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Enter Your Email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row " >
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="50"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
	 
</form>						
		</div><!--/Center Column-->


	  <!-- Right Column -->
	  <div class="col-sm-3">
 
			<!-- Form --> 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-log-in"></span> 
						Log In
					</h3>
				</div>
				<div class="panel-body">
					<form>
						<div class=" form-group">
							<input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Log In</button>
					</form>
				</div>
			</div>
 
			<!-- Progress Bars -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-scale"></span> 
						TRACKED RECORD
					</h3>
				</div>
				<div class="panel-body">
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
						aria-valuemin="0" aria-valuemax="100" style="width:100%">
							100% Visioned
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
						aria-valuemin="0" aria-valuemax="100" style="width:80%">
							80% Objectively Innovated
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
						aria-valuemin="0" aria-valuemax="100" style="width:45%">
							45% Work in Progress
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
						aria-valuemin="0" aria-valuemax="100" style="width:35%">
							35% Done
						</div>
					</div>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bullhorn"></span> 
						Active Predomination Goal
					</h3>
				</div>
				<div class="panel-body">
					<p>Our goal is to dominate our region with quality education and character building to produce and bring out intelligent and as well prepare each and every one of our student to be the best in their choosen career.</p>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default">Resource</button>
						<button type="button" class="btn btn-default">Envision</button>
						<button type="button" class="btn btn-default">Niche</button>
					</div>
				</div>
			</div>


	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	
	<footer>
		
						<!-- Thumbnails --> 
						<h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
							<div class="row">
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
								<div class="col-xs-6">
									<a href="#" class="thumbnail">
										<img src="holder.js/110x80" alt="">
									</a>
								</div>
							</div>
							
					</div>

				</div>
				<!-- /.row -->	
			</div>
        </div>
        
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; Mayotech2017 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>

</html>
