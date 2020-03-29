<html>
<head><title> Hospital Database ** Romove a staff from an assigned room </title></head>
  <body>
    <h2> Remove a staff from an assigned room </h2>
    <?php
    if(isset($_COOKIE["username"])) {

      echo "<form action=\"removeStaff.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password,'group11');

      $sql = "select id from ROOMNUMBERS";
      $sql1 = "select room_list_id from ROOMNUMBERS";

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
          echo "Room number: <select name=\"room_list_id\">";

          while ($val1 = $result1->fetch_assoc()) {
            echo "<option value='$val1[room_list_id]'>$val1[room_list_id]</option>";
          }
          echo "</select>";
          echo "<input type=submit name=\"submit\" value=\"remove\">";
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
