<html>
<head><title>University of Hospital</title></head>
<body>


<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updateRoom2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

	$sql = "select * from ROOM where room_number='$_POST[room_number]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

	if($result->num_rows != 0)
	{
	   $rec=$result->fetch_assoc();
	   echo "Room Number: <input type=text name=\"room_number\" value=\"$rec[room_number]\"><br><br>";
	   echo "number of patients: <input type=text name=\"number_patients\" value=\"$rec[number_patients]\"><br><br>";
     echo "booked: <input type=text name=\"booked\" value=\"$rec[booked]\"><br><br>";
     echo "<input type=submit name=\"submit\" value=\"Update\">";
	}
	else
	{
		echo "<p>No data to Display. </p>";
	}

	echo "</form>";
	echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>";

}
?>
</body>
</html>
