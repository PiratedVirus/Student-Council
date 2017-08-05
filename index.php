<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

		<title>Log In Or Sign In</title>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link rel="stylesheet" href="Assets/css/base.css">


	</head>
	<body>

		<nav id="subpages">
		  <div class="nav-wrapper"><a href="default.html" class="brand-logo">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		    <ul class="right hide-on-med-and-down">
		      <li><a href="register.php">Sign Up</a></li>
		      <li><a href="default.html#team-link">Team</a></li>
		      <li><a href="default.html#contact-link">Contact Us</a></li>
		    </ul>
		    <ul id="mobile-demo" class="side-nav">
		    <li><a href="register.php">Sign Up</a></li>
		    <li><a href="default.html#team-link">Team</a></li>
		    <li><a href="default.html#contact-link">Contact Us</a></li>
		    </ul>
		  </div>
		</nav>

		<div class="row shifter">

		  <div class="col s12">

		    <ul class="tabs">
		      <li class="tab col s3"><a  href="#students">Students</a></li>
		      <li class="tab col s3"><a  href="#admin">Admin</a></li>
		    </ul>

		  </div>

		  <div id="students" class="container form-holder col s12">
		  		<?php   require_once 'Core/user.php'; ?>


		  </div>

		  	<div id="admin" class="container form-holder col s12">
	  			<?php   require_once 'Admin/adminlogin.php'; ?>
		  	</div>

		  </div>
		</div>


		            


		<div class="center-align">
			<a href="register.php">Not a Member? Create new Account</a>
		</div>
	<footer class="page-footer white custom">

	  <div class="footer-copyright">
	    <div class="container center">
	      <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>
	    </div>
	  </div>
	</footer>

		<script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>  
		<script src="Assets/js/materialize.js"></script>  
		<script src="Assets/js/init.js"></script>

	</body>
</html>
<?php ob_end_flush(); ?>