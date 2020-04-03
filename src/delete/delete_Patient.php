<html>
<head><title> Hospital Database ** Delete a patient </title></head>
  <body>
    <h2> Delete a patient record </h2>
    <?php
    if(isset($_COOKIE["username"]))
    {
      echo "<form action=\"deletePatient.php\" method=post>";

      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from PATIENT P, PERSON PR , ROOM R where P.id = PR.id";
      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        echo "Patient id: <select name=\"id\">";
        while($val = $result->fetch_assoc())
        {
          echo "<option value='$val[id]'>$val[id]</option>";
        }
        echo "</select>";
        echo "<input type=submit name=\"submit\" value=\"Delete\">";
      } else {
        echo "<p> No data to display </p>";
      }
      echo "</form>";
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"../index.php\">Login First</a></p>";
    }
     ?>
   </body>
</html>
