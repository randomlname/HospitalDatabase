<?php
if (isset($COOKIE["username"])) {
  $username = $_COOKIE["username"];
  $password = $_COOKIE["password"];

  $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
  if($mysqli -> connect_errno)
  {
    echo "Connection Issue";
    exit;
  }

  $sql = "insert into PERSON values ('$_POST[id]','$_POST[name]',' $_POST[address]','$_POST[dob]')";
  if ($conn -> query($sql))
  {
    $conn -> query($sql)
    echo "<h3> Person Added! </h3>";
  } else {
    $err = $conn -> errno;
    if($err == 1062)
    {
      echo "<p> Person Name $_POST[name] already exists!</p>";
    } else {
      echo "<p>MySQL error code $err </p>";
    }
  }

  echo "<a href=\ "main.php\ ">Return</a> to Home Page.";

} else {
  echo "<h3> You are not logged in! </h3><p> <a href=\"login.php\">Login First</a></p>";
}
?>
