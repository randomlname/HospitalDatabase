<?php
if (isset($_COOKIE["username"])) {
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
$sql = "update ROOM set room_number='$_POST[room_number]',number_patients='$_POST[number_patients]',booked='$_POST[booked]' where room_number='$_POST[room_number]'";
if($conn->query($sql))
{
	echo "<h3> Room updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p> Room_number: $_POST[room_number] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"../main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>";
}
?>
