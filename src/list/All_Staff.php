<html>
<head><title> Hospital Database ** All staff member</title></head>
  <body>
    <h2> Display all staff members </h2>

    <p style="color:green;"> Staff member List </p>
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
        while($val = $result->fetch_assoc())
        {
          echo "<p> Staff name:<option value='$val[name]'>$val[name]</option></p>";
          echo "<p> staff id:<option value='$val[id]'>$val[id]</option></p>";
          echo "<p> staff duty:<option value='$val[duty]'>$val[duty]</option></p>";
          echo "<p> staff pay/hour:<option value='$val[wage]'>$val[wage]</option></p>";
          echo "<p> staff hours:<option value='$val[hours]'>$val[hours]</option></p>";
        }
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