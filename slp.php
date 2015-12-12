<!doctype html>
<?php include 'slp_accept.php'; ?>
<html>
	<head>
		<title>
			PURGE | Student leadership
		</title>
		<link  rel="shortcut icon" href="images/favicon.ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="styles/main.css" type="text/css">
		<link rel="stylesheet" href="styles/events_home.css" type="text/css">
		<link rel="stylesheet" href="styles/contact.css" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"><link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
	</head>
	<body>


		<div id='side-pane'>
			<img id='golo' src="images/logo.png">
			<a id='karao'><h1>PURGE</h1></a><br>
			<ul class='nav'>
				<li class="main1"> <a  href="homepage.php"> <h2>Home</h2></a> </li>
				<li class="main1"> <a href="about.php"> <h2>About us</h2> </a> </li>
				<li class="main1"> <a href="events.php"><h2> Events</h2> </a> </li>
				<li class="main1"> <a href="team.php"> <h2>Team Structure </h2></a> </li>
				<li class="main1"> <a href="contact.php"><h2>Reach Us </h2></a></li>
				<li class="main1 active"> <a href="#"><h2>Student Leadership</h2></a></li>	
			</ul>
			<h3 style="text-align:center;font-family:lato;color:white">Follow Us</h3><br>
			<div>
			<center><a style="margin-left:5px" href="https://www.facebook.com/PURGE-706870132752576/?fref=ts" target="_blank"><img src="images\fb.png"></a>
			<a href="https://twitter.com/purgemanit" target="_blank"><img src="images\tw.png"></a></center></div>
		</div>
		<div style="clear:both"></div>
		<div class="quotes">
			<h3>“What's the use of a fine house if you haven't<br> got a tolerable planet to put it on?”</h3>
			<h3 style="margin-left:25%">-Henry David Thoreau</h3>
		</div>
		<div class="remains">
		<span class="events"><h3 id='tile'>Student Leadership Program</h3></span>
		<span class="events"><h4 id='yo'>Fill the form to apply for becoming an ambassador of Purge in your college</h4></span>
		<form action="slp_accept.php" id="contact" method="post" onsubmit="return validateForm()">
								
				<div class="field field_name">
					<label for="contactName"><h3>Name</h3></label>
					<input type="text" name="contact_name" id="contact_name" value="" class="txt requiredField" />
									</div>

				<div class="field">
					<label for="email field_email"><h3>Email</h3></label>
					<input type="text" name="contact_email" id="contact_email" value="" class="txt requiredField email" />
									</div>

				<div class="field field_name">
					<label for="contactName"><h3>College</h3></label>
					<input type="text" name="college_name" id="college_name" value="" class="txt requiredField" />
									</div>

				<div class="field field_name">
					<label for="contactName"><h3>Course</h3></label>
					<input type="text" name="course_name" id="course_name" value="" class="txt requiredField" />
									</div>

				<div class="field field_name">
					<label for="contactName"><h3>Year</h3></label>
					<input type="text" name="year" id="year" value="" class="txt requiredField" />
									</div>
				<div class="field field_name">
					<label for="contactName"><h3>Contact No.</h3></label>
					<input type="text" name="contact_no" id="contact_no" value="" class="txt requiredField" />
									</div>					

				<div class="field field_submit">
					<input type="hidden" name="contact_submit" id="contact_submit" value="true" />
					<input id="doit" class="myButton" type="submit" value="Submit" />
				</div>
			</form>
		</div>
		<div class="looter">
			<div class="kar"><h id="kaise">About PURGE</h><br><br>
			<h id="aise">Purge is an initiative by students<br>of MANIT to reduce polythene<br> usage in the country.</h></div>
			<div  class="aao"><h>Polythene Usage Reduction for Greener Environment.</h><br>
					<h>	Contact us at purge.manit@gmail.com
			</h><br>
			<h> ©PURGE_MANIT2015</h></div>

		</div> 
		<script type="text/javascript" src="scripts/slp.js"></script>
	</body>
</html>


