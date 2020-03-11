<html>
<head><title>University of Hospital</title></head>
<body>


<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updatePatient2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

	$sql = "select * from PATIENT where id='$_POST[id]'";

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
	   echo "Priority Level: <input type=int name=\"priority_level\" value=\"$rec[priority_level]\"><br><br>";
	   echo "Reason: <input type=text name=\"reason\" value=\"$rec[reason]\"><br><br>";
	   echo "<input type=hidden name=\"id\" value=\"$_POST[id]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">";

	}
	else
	{
		echo "<p>Umm...you may want to enter some data. ;) </p>";
    echo "<p>We get here? </p>";

	}

	echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>



</body>
</html>
