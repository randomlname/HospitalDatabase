<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title> Hospital Database ** Delete a staff member</title>

</head>
  <body>
    <div class="jumbotron text-center">
    <h2> Delete a staff member record </h2>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
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
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    } else {
      echo "<h3> You are not logged in! </h3><p> <a href=\"../index.php\">Login First</a></p>";
    }
     ?>
   </div>
 </div>
</div>
</body>
</html>
