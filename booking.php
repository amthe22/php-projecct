<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:signup.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking|Acqualina</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>

<body>
<!--/main-header-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<!--<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>-->
					<div style="color:blue;">Book your dream room</div>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +918095939757</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:abintmichael108@gmail.com">abintmichael108@gmail.com</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a  href="index.php"><span>A</span>cqualina <p class="s-log"></p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				           <ul class="nav navbar-nav">
											    <li><a href="index.php">Home</a></li>
												<li><a href="about.php">About</a></li>
												<li><a href="gallery.php">Gallery</a></li>
												<!-- <li class="dropdown">
													<a href="codes.html" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Pages <b class="caret"></b></a>
													 <!--<ul class="dropdown-menu">
														<li><a href="icons.html">Font Icons</a></li>
													
														<li><a href="codes.html">Short Codes</a></li>
													</ul>
												</li>-->
												<li class="active"><a href="booking.php">book room</a><li>
												<li><a href="contact.php">Contact</a></li>
                                                                                               <?php
                                                                                                if($_SESSION['email']=='admin@acqualina.com')
                                                                                                {
                                                                                                ?>
												<li class="dropdown">
                                                                                                        <a href="admin.php" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
													 <ul class="dropdown-menu">
														<li><a href="admin.php">profile</a></li>
													
														<li><a href="signout.php">signout</a></li>
													</ul>
												</li>
                                                                                                <?php
                                                                                                }else{
                                                                                                ?>
                                                                                                <li class="dropdown">
                                                                                                        <a href="profile.php" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
													 <ul class="dropdown-menu">
														<li><a href="profile.php">profile</a></li>
													
														<li><a href="signout.php">signout</a></li>
													</ul>
												</li>
                                                                                                <?php
                                                                                                }
                                                                                                ?>
												
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>
									<!--<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons 
													</div>
													<div id="cd-search" class="cd-search">
														<!--<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
														</form>
													</div>
												</div>-->
					
							</div> 

			
		<!--//header-w3l-->
		</div>
		 </div>
		 
<div class="about-bottom" id="ab">

	<div class="col-md-6 w3l_about_bottom_right two">
			<h3 class="tittle why">Book a Reservation</h3>
			<div class="book-form">

			   <form action="book.php" method="post">
					<div class="col-md-6 form-date-w3-agileits">
						<label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
						<input type="text" name="name" placeholder="Your name" required="">
					</div>
					<div class="col-md-6 form-date-w3-agileits second-agile">
						<label><i class="fa fa-envelope" aria-hidden="true"></i> Email :</label>
						<input type="email" name="email" placeholder="Your email" required="">
					</div>
					 <div class="col-md-6 form-date-w3-agileits">
									<label><i class="fa fa-calendar" aria-hidden="true"></i> Arrival Date :</label>
									<input  id="datepicker" name="arrdate" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								
								</div>
					<div class="col-md-6 form-time-w3layouts second-agile">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
							<input type="time" name="arrtime">
					</div>
					<div class="col-md-6 form-date-w3-agileits">
						        <label><i class="fa fa-calendar" aria-hidden="true"></i> Departure Date :</label>
									<input  id="datepicker1" name="checkoutdate" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									
								</div>
					<div class="col-md-6 form-time-w3layouts second-agile">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
							<input type="time" name="checkouttime">
					</div>
					<div class="col-md-6 form-left-agileits-w3layouts bottom-w3ls">
							<label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
							<select class="form-control" name="roomtype">
								<option></option>
								<option value="Standard Double Room">Standard Double Room</option>
								<option value="Standard Family Room">Standard Family Room</option>
								<option value="Garden Family Room">Garden Family Room</option>
								<option value="Deluxe Double Room">Deluxe Double Room</option>
								<option value="Executive Junior Suite">Executive Junior Suite</option>
								<option value="Maisonette">Maisonette</option>
							</select>
					</div>
					<div class="col-md-6 form-left-agileits-w3layouts second-agile">
							<label><i class="fa fa-users" aria-hidden="true"></i> No.of People :</label>
							<select class="form-control" name="np">
								<option></option>
								<option value="1">1 Person</option>
								<option value="2">2 People</option>
								<option value="3">3 People</option>
								<option value="4">4 People</option>
								<option value="5">5 People</option>
								<option>More</option>
							</select>
					</div>
					<div class="clearfix"> </div>
					<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
						  <input type="submit" value="Make a Reservation">
					</div>
			</form>
								</div>

		</div>
		<div class="col-md-6 w3l_about_bottom_left">
		
<img src="images/33.jpg" alt="" class="img-responsive" />
			<div class="w3l_about_bottom_left_video book-text">
				<h4>BooK Now</h4>
			</div>
		</div>
		
		<div class="clearfix"> </div>
	</div>
	</body>
</html>