<html>
<head><title> Hospital Database ** Delete a staff member</title></head>
  <body>
    <h2> Delete a staff member </h2>
    <form action="deleteStaff.php" method=post>
      Staff Id: <input type=text name="id" size=6><br><br>
      <input type=submit name="Submit" value="Insert">
    </form>

    <p style="color:green;"> Avaliable staff Id's </p>
    <?php
    if(isset($_COOKIE["username"]))
    {
      echo "<form action=\"deleteStaff.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from STAFF";
      $aql = "select name from PERSON where id='$sql[id]'";
      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        while($val = $result->fetch_assoc())
        {
          echo "<option value='$aql[name]'>$aql[name]</option>";
          echo "<option value='$val[id]'>$val[id]</option>";
          echo "<option value='$val[duty]'>$val[duty]</option>";
          echo "<option value='$val[wage]'>$val[wage]</option>";
          echo "<option value='$val[hours]'>$val[hours]</option>";
        }
      } else {
        echo "<p> No data to display </p>";
      }
      echo "</form>";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"index.php\">Login First</a></p>";
    }
     ?>
   </body>
</html>
   </body>
</html>
