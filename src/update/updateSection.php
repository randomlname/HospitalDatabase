<html>
<head><title>University of Hospital</title></head>
<body>


<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updateSection2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

	$sql = "select * from SECTION where name='$_POST[name]'";

	$result = $conn->query($sql);

	if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

	if($result->num_rows != 0)
	{

	   $rec=$result->fetch_assoc();
	   echo "Section name: <input type=text name=\"name\" value=\"$rec[name]\"><br><br>";
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
