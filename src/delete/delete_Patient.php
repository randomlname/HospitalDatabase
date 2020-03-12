<html>
<head><title> Hospital Database ** Delete a patient </title></head>
  <body>
    <form action="deletePatient.php" method=post>
      Patient Id: <input type=text name="id" size=6><br><br>
      <input type=submit name="Submit" value="Insert">
    </form>
    <p style="color:red;"> Avaliable patient Id's </p>
    <?php
    if(isset($_COOKIE["username"]))
    {
      echo "<form action=\"deletePatient.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from PATIENT P, PERSON PR where P.id = PR.id";
      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        while($val = $result->fetch_assoc())
        {
          echo "<option value='$val[id]'>$val[id]</option>";
          echo "<option value='$val[name]'>$val[name]</option>";
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
