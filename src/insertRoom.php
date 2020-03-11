<?php
if (isset($_COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];

  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
  if($mysqli->connect_errno)
  {
    echo "Connection Issue";
    exit;
  }

  $sql = "insert into ROOM values ('$_POST[room_number]','$_POST[number_patients]','$_POST[booked]','$_POST[section_name]')";
  if ($conn->query($sql))
  {
    echo "<h3> Room Added! </h3>";
  } else {
    $err = $conn->errno;
    if($err == 1062)
    {
      echo "<p> Room Name $_POST[name] already exists!</p>";
    } else {
      echo "<p>MySQL error code $err </p>";
    }
  }

  echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
  echo "<h3> You are not logged in! </h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
