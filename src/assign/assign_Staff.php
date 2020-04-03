<html>
<head><title> Hospital Database ** Assign a staff to a room </title></head>
  <body>
    <h2> Assign a staff to a room </h2>
    <?php
    if(isset($_COOKIE["username"])) {

      echo "<form action=\"assignStaff.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password,'group11');

      $sql = "select id from OVERSEES";
      $sql1 = "select room_number from ROOM";

      $result = $conn->query($sql);
      $result1 = $conn->query($sql1);
      if($result->num_rows != 0)
      {
        echo "Staff ID: <select name=\"id\">";

        while ($val = $result->fetch_assoc()) {
          echo "<option value='$val[id]'>$val[id]</option>";
        }

        echo "</select>";

        if ($result1->num_rows != 0) {
          echo "Room number: <select name=\"room_number\">";

          while ($val1 = $result1->fetch_assoc()) {
            echo "<option value='$val1[room_number]'>$val1[room_number]</option>";
          }
          echo "</select>";
          echo "<input type=submit name=\"submit\" value=\"assign\">";
        }

      } else {
        echo "<p> no matching data for query </p>";
      }

      echo "</form>";
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";

    }
    else {
      echo "<h3>You are not logged in!</h3><p><a href=\"../index.php\">Login First</a></p>";
    }

    ?>

  </body>
</html>
