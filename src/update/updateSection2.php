<?php
if (isset($_COOKIE["username"])) {
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
$sql = "update SECTION set name='$_POST[name] where name='$_POST[name]'";
if($conn->query($sql))
{
	echo "<h3> Section updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p> Section: $_POST[name] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"../main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>";
}
?>
