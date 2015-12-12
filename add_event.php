<html>

<body>

	<?php
	if(isset($_POST["event_name"]) && isset($_POST["event_content"]) &&  isset($_POST["event_date"]) && isset($_POST["event_content"]) && isset($_POST["event_image"])){
		$name= $_POST["event_name"];
		$heading= $_POST["event_content"];
		$date= $_POST["event_date"];
		$content= $_POST["event_content"];
		$image= $_POST["event_image"];

		if(!empty($name) && !empty($heading) && !empty($date) && !empty($content) && !empty($image)){
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

			$sql = "INSERT INTO events(Name,Heading,Content,Image,Date)
			VALUES ('$name','$heading','$content','$image','$date')";

			if (!mysql_query($sql)) {
			    
			    die('There is an error. Please try again.'.mysql_error());

			} else {
			   echo "<h3>Your event has been added</h3>";
			}

			mysql_close();
		}
	}
?>		

</body>
</html>