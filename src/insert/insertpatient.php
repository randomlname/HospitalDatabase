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

  $sql = "insert into PERSON values ('$_POST[id]','$_POST[name]','$_POST[address]','$_POST[dob]')";
  if ($conn->query($sql))
  {
    $sql = "insert into PATIENT values ('$_POST[id]','$_POST[room_number]','$_POST[priority_level]','$_POST[reason]')";
    if ($conn->query($sql)) {
      echo "<h3> Patient Added! </h3>";
    } 
  } else {
    $err = $conn->errno;
    if($err == 1062)
    {
      echo "<p> Patient Name $_POST[name] already exists!</p>";
    } else {
      echo "<p>MySQL error code $err </p>";
    }
  }

  echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
  echo "<h3> You are not logged in! </h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
