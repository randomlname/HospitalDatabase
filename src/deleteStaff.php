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

  $sql = "select id from STAFF where id='$_POST[id]'";
  $result = $conn->query($sql);
  if($result->num_rows != 0) {
    $sql = "delete from STAFF where id='$_POST[id]'";
      if ($conn->query($sql)) {
        echo "<h3> Staff Member Deleted! </h3>";
        $sql = "delete from PERSON where id='$_POST[id]'";
        $conn->query($sql);
      }
      else {
        $err = $conn->errno;
        if($err == 1451)
        {
          echo "<p>Cannot delete staff due to foreign key violation</p>";
        } else {
          echo "<p>MySQL error code $err </p>";
        }
      }
    } 

  else {
    echo "<p>Staff member with id '$_POST[id]' does not exist</p>"
  }

  echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
  echo "<h3> You are not logged in! </h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
