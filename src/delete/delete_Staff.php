<html>
<head><title> Hospital Database ** Delete a staff member</title></head>
  <body>
    <h2> Delete a staff member records </h2>
    <?php
    if(isset($_COOKIE["username"]))
    {
      echo "<form action=\"deleteStaff.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from STAFF S, PERSON P where S.id = P.id";

      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        echo "Staff id: <select name=\"id\">";
        while($val = $result->fetch_assoc())
        {
          echo "<p> staff id:<option value='$val[id]'>$val[id]</option></p>";
        }
        echo "</select>";
        echo "<input type=submit name=\"submit\" value=\"Delete\">";
      } else {
        echo "<p> No data to display </p>";
      }
      echo "</form>";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"../index.php\">Login First</a></p>";
    }
     ?>
   </body>
</html>
   </body>
</html>
