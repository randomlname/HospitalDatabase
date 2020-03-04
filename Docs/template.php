<?php
//If the username and pass has been previously saved as a cookie, use it
if(isset($_COOKIE["username"])){

  echo "<form action=\"updatedoctor2.php\" method=post>";

  //retrieve the username and pass from the cookies
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

  //Create a new connection
	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

  //If there is a connection error
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit;
	}

  //Otherwise the connection is valid, start the querying
  //for the info that needs to be updated.
  $sql = "select * from STAFF where duty = 'DOCTOR'";

  //Get the result from the query
  $result = $conn->query($sql);

  //If we could not find a result, bad query
  if(!$result)
	{
	   echo "Problem executing select!";
	   exit;
	}

  //If the result has found atleast 1 instance of data
  if ($result -> num_rows!= 0) {

  }

  //There are no instances of the data, add something
  else {

  }

}

//There are no cookies found, log in again
else {

}

?>
