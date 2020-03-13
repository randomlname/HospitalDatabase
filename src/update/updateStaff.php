<html>
<head><title>University of Hospital</title></head>
<body>


<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updateStaff2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

	$sql = "select * from STAFF where id='$_POST[id]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

	if($result->num_rows != 0)
	{
	   $rec=$result->fetch_assoc();
	   echo "Duty: <input type=text name=\"duty\" value=\"$rec[duty]\"><br><br>";
	   echo "Wage: <input type=float name=\"wage\" value=\"$rec[wage]\"><br><br>";
	   echo "Hours: <input type=float name=\"hours\" value=\"$rec[hours]\"><br><br>";
	   echo "<input type=hidden name=\"id\" value=\"$_POST[id]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">";

	}
	else
	{
		echo "<p>No data to display</p>";

	}
	echo "</form>";
	echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>";

}
?>



</body>
</html>
