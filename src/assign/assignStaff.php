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

  $sql = "insert into ROOMNUMBERS values ('$_POST[id]','$_POST[room_number]')";

  if ($conn->query($sql)) {
    echo "<h3> Assigned staff with id: $_POST[id] to room number $_POST[room_number] </h3>";
  } else {
    $err = $conn->errno;
  }
  if($err == 1062) {
      echo "<p> Staff member with id: $_POST[id] already assigend to room number $_POST[room_number] </p>";
    } else {
      echo "<p>MySQL error code $err </p>";
    }
  }

  echo "<a href=\"../main.php\">Return</a> to Home Page.";

} else {
  echo "<h3> You are not logged in! </h3><p> <a href=\"../index.php\">Login First</a></p>";
}
?>
