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

  $name = "select id from PATIENT where id='$_POST[id]'";
  $result = $conn->query($name);
  if($result->num_rows != 0) {
    $sql = "delete from PATIENT where id='$_POST[id]'";
    if($conn->query($sql)) {
      echo "<h3> patient deleted!</h3>";
      $sql = "delete from PERSON where id='$_POST[id]'";
      $sql = "update ROOM set number_patients = number_patients - 1 where room_number = '$_POST[room_number]'";
      $conn->query($sql);
    } else {
      $err = $conn->errno;
      if ($err == 1451) {
        echo "<p> Cannot delete </p>";
      } else {
        echo "<p> MySQL error code $err </p>";
      }
    }
  } else {
    echo "<p> patient dose not exist </p>";
  }

  echo "<a href=\"../main.php\"Return</a> to Home Page.";
} else {
  echo "<h3> you are not logged in! </h3> <a href=\"../index.php\">Login first</a></p>";
}
?>
