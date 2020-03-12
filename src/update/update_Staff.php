<html>
<head><title> Hospital Database ** Update a staff </title></head>
  <body>
    <h2> Update staff member records </h2>
    <?php
    if(isset($_COOKIE["username"])) {

      echo "<form action=\"updateStaff.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password,'group11');

      $sql = "select id from STAFF";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
        echo "Staff ID: <select name=\"id\">";

        while ($val = $result->fetch_assoc()) {
          echo "<option value='$val[id]'>$val[id]</option>";
        }

        echo "</select>";
        echo "<input type=submit name=\"submit\" value=\"View\">";

      }
      else {
        echo "<p> no matching data for query </p>";
      }

      echo "</form>";

    }
    else {
      echo "<h3>You are not logged in!</h3><p><a href=\"../index.php\">Login First</a></p>";
    }

    ?>

  </body>
</html>
