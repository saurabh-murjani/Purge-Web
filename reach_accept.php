<html>
	<head>
		<title>
			PURGE | Be the change
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
				<li class="main1 active"> <a href="contact.php"><h2>Reach Us </h2></a></li>
				<li class="main1"> <a href="slp.php"><h2>Student Leadership</h2></a></li>	
			</ul>
			<h3 style="text-align:center;font-family:lato;color:white">Follow Us</h3><br>
			<div>
			<center><a style="margin-left:5px" href="https://www.facebook.com/PURGE-706870132752576/?fref=ts" target="_blank"><img src="images\fb.png"></a>
			<a href="https://twitter.com/purgemanit" target="_blank"><img src="images\tw.png"></a></center></div>
		</div>
		<div class="remains">
			<span class="events">
				<h3 id='yo'>Thank You!!</h3></span>
		<?php
	if(isset($_POST["contact_name"]) && isset($_POST["contact_email"]) && isset($_POST["contact_comments"])){
		$name= $_POST["contact_name"];
		$email= $_POST["contact_email"];
		$message= $_POST["contact_comments"];

		if(!empty($name) && !empty($email) && !empty($message)){
			$servername = "localhost";
			$username = "root";
			$password = "amit";
			$dbname = "purgemanit";
	// Create connection
			$link =mysql_connect($servername,$username,$password);
			// Check connection
			if (!$link) {
			    die("Connection failed: ");
			} 
			$db_select=mysql_select_db($dbname,$link);

			$sql = "INSERT INTO reach_us(Name,Email,Message)
			VALUES ('$name','$email','$message')";

			if (!mysql_query($sql)) {
			    
			    die('There is an error. Please try again.'.mysql_error());

			} else {
			   echo "<h3>Your response has been recorded</h3>";
			}

			mysql_close();
		}
	}
?>		
</div>
		<div class="looter">
			<div class="kar"><h id="kaise">About PURGE</h><br><br>
			<h id="aise">Purge is an initiative by students<br>of MANIT to reduce polythene<br> usage in the country.</h></div>
			<div  class="aao"><h>Polythene Usage Reduction for Greener Environment.</h><br>
					<h>	Contact us at purge.manit@gmail.com
			</h><br>
			<h> ©PURGE_MANIT2015</h></div>

		</div>  
	<script type="text/javascript" src="scripts/reach.js"></script>
	</body>
</html>


