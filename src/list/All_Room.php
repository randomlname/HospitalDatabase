<html>
<head><title> Hospital Database ** All Staff member</title></head>
  <body>
    <h2> Display all Room details </h2>
    <p style="color:green;"> Room List </p>
    <?php

    echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";

    if(isset($_COOKIE["username"]))
    {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from ROOM";

      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        while($val = $result->fetch_assoc())
        {
          echo "<p><strong>____________________________________________________</strong></p>";
          echo "<p><strong> Room Number:</strong><option value='$val[room_number]'>$val[room_number]</option></p>";
          echo "<p><strong> Number of Patients in room:</strong><option value='$val[number_patients]'>$val[number_patients]</option></p>";
          echo "<p><strong> Booked/full:</strong><option value='$val[booked]'>$val[booked]</option></p>";
          echo "<p><strong> Section name</strong><option value='$val[section_name]'>$val[section_name]</option></p>";
          echo "<p><strong>____________________________________________________</strong></p>";
        }
      } else {
        echo "<p> No data to display </p>";
      }
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"../index.php\">Login First</a></p>";
    }
     ?>
   </body>
</html>
