<html>
<head><title> Hospital Database ** Update a section </title></head>
  <body>
    <h2> Update section details </h2>
    <?php
    if(isset($_COOKIE["username"])) {

      echo "<form action=\"updateSection.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca", $username, $password,'group11');

      $sql = "select name from SECTION";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
        echo "room number : <select name=\"name\">";

        while ($val = $result->fetch_assoc()) {
          echo "<option value='$val[name]'>$val[name]</option>";
        }

        echo "</select>";
        echo "<input type=submit name=\"submit\" value=\"View\">";

      }
      else {
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
