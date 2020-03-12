<?php
if (isset($_COOKIE["username"])) {
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
$sql = "update PATIENT set id='$_POST[id]',room_number='$_POST[room_number]',priority_level='$_POST[priority_level]',reason='$_POST[reason]' where id='$_POST[id]'";
if($conn->query($sql))
{
	echo "<h3> Patient updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>Patient ID: $_POST[id] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"../main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>";
}
?>
