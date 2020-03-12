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

  $name = "select room_number from ROOM where room_number='$_POST[room_number]'";
  $result = $conn->query($name);
  if($result->num_rows != 0) {
    $sql = "delete from ROOM where room_number='$_POST[room_number]'";
    if($conn->query($sql)) {
      echo "<h3> Room deleted!</h3>";
    } else {
      $err = $conn->errno;
      if ($err == 1451) {
        echo "<p> Cannot delete </p>";
      } else {
        echo "<p> MySQL error code $err </p>";
      }
    }
  } else {
    echo "<p> room dose not exist </p>";
  }

  echo "<a href=\"../main.php\"Return</a> to Home Page.";
} else {
  echo "<h3> you are not logged in! </h3> <a href=\"../index.php\">Login first</a></p>";
}
?>
