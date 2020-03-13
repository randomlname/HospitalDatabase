<html>
<head><title> Hospital Database ** All Patient records </title></head>
  <body>
    <h2> Display all Patient records </h2>
    <p style="color:green;"> Patient records </p>
    <?php
    echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    if(isset($_COOKIE["username"]))
    {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');
      $sql = "select * from PATIENT P, PERSON PR where P.id = PR.id";

      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        while($val = $result->fetch_assoc())
        {
          echo "<p><strong> Patient id:</strong><option value='$val[id]'>$val[id]</option></P>";
          echo "<p><strong> Patient name:</strong><option value='$val[name]'>$val[name]</option></p>";
          echo "<p><strong> Patient room number:</strong><option value='$val[room_number]'>$val[room_number]</option></P>";
          echo "<p><strong> Patient priority level:</strong><option value='$val[priority_level]'>$val[priority_level]</option></P>";
          echo "<p><strong> Patient reason:</strong><option value='$val[reason]'>$val[reason]</option></P>";
          echo "<p><strong>____________________________________________________</strong></p>";
        }
      } else {
        echo "<p> No data to display </p>";
      }
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"index.php\">Login First</a></p>";
    }
    ?>
  </body>
</html>
