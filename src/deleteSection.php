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

  $name = "select name from SECTION where name='$_POST[name]'";
  $result = $conn->query($name);
  if($result->num_rows != 0) {
    $sql = "delete from SECTION where name='$_POST[name]'";
    if($conn->query($sql)) {
      echo "<h3> Section deleted!</h3>";
    } else {
      $err = $conn->errno;
      if ($err == 1451) {
        echo "<p> Cannot delete </p>";
      } else {
        echo "<p> MySQL error code $err </p>";
      }
    }
  } else {
    echo "<p> section dose not exist </p>";
  }

  echo "<a href=\"main.php\"Return</a> to Home Page.";
} else {
  echo "<h3> you are not logged in! </h3> <a href=\"index.php\">Login first</a></p>";
}
?>
