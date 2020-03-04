<html>
<head><title>University of Wendy</title></head>
<body>



<?php
if(isset($_COOKIE["username"])){

echo "<form action=\"updatedept2.php\" method=post>";

	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];	

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit; 
	}
	
	$sql = "select * from DEPT where dname='$_POST[dname]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit; 
	}
        if($result->num_rows!= 0)
	{
	   $rec=$result->fetch_assoc(); 
	   echo "Department Name: <input type=text name=\"dname\" value=\"$rec[dname]\"><br><br>";
	   echo "Department Location: <input type=text name=\"loc\" value=\"$rec[loc]\"><br><br>";
	   echo "Department Chair: <input type=text name=\"id\" value=\"$rec[id]\"><br><br>";
	   echo "<input type=hidden name=\"oldname\" value=\"$_POST[dname]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">"; 

	}
	else
	{
		echo "<p>Umm...you may want to enter some data. ;) </p>"; 
	}

	echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 

}
?>


 
</body>
</html>
