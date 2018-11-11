<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Sree Vidyanikethan Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#ffffff">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Sree Vidyanikethan</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span>About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/mblockpic.jpg" alt="..." style="width:100%">
      <div class="carousel-caption">
        <b><h2>Welcome to Sree Vidyanikethan</h2></b>
      </div>
    </div>
    <div class="item">
      <img src="images/librarypic.png" alt="..." style="width:100%">
      <div class="carousel-caption">
	 <b><h2>Central Library</h2></b>
      </div>
    </div>
    <div class="item">
      <img src="images/uncle.jpg" alt="..." style="width:100%">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
      <img src="images/svdc_principal.jpg" alt="..." style="width:100%">
      <div class="carousel-caption">
        <b><h2>SVDC Principal</h2></b>
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2></h2>
		Welcome to the Sree Vidyanikethan page, it enables you to get notifications regarding your fee payments, cultural events in a handy way, Simply by logging into your individual logins.";
		}
		?>
		
		
		
		
		</div>
	
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:#ffffff">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.phptpoint.com/"> Developed by  3rd Year Statistics.</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>