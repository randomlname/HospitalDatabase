<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title> Hospital Database ** All Staff member</title>
</head>
  <body>
    <div class="jumbotron text-center">
    <h2> Display all staff members </h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md">
    <p style="color:green;"> Staff member List </p>
    <?php
    echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
    if(isset($_COOKIE["username"]))
    {
      $username = $_COOKIE["username"];
      $password = $_COOKIE["password"];

      $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,'group11');

      $sql = "select * from STAFF S, PERSON P where S.id = P.id";

      $result = $conn->query($sql);
      if ($result->num_rows != 0)
      {
        while($val = $result->fetch_assoc())
        {
          echo "<p><strong>____________________________________________________</strong></p>";
          echo "<p><strong> Staff name:</strong><option value='$val[name]'>$val[name]</option></p>";
          echo "<p><strong> staff id:</strong><option value='$val[id]'>$val[id]</option></p>";
          echo "<p><strong> staff duty:</strong><option value='$val[duty]'>$val[duty]</option></p>";
          echo "<p><strong> staff pay/hour:</strong><option value='$val[wage]'>$val[wage]</option></p>";
          echo "<p><strong> staff hours:</strong><option value='$val[hours]'>$val[hours]</option></p>";
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
   </div>
   </div>
 </div>
   </body>
</html>
