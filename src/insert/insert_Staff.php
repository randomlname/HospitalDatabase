<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title> Hospital Database ** Add New staff </title>
</head>
  <body>
    <div class="jumbotron text-center">
    <h2> Add a new staff member </h2>
    </div>

    <form action="insertStaff.php" method=post>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
      Staff Id: <input type=text name="id" size=6><br><br>
      Staff Name: <input type=text name="name" size=20><br><br>
      Staff Address: <input type=text name="address" size=20><br><br>
      Staff Dob: <input type=text name="dob" size=10><br><br>
      Staff duty: <input type=text name="duty" size=20><br><br>
      Staff wage: <input type=float name="wage"><br><br>
      Staff hours: <input type=float name="hours"><br><br>
      <input type=submit name="Submit" value="Insert">
    </div>
  </div>
</div>
      <?php
      echo "<br>";
      echo "<strong><a href=\"../main.php\">Return</a></strong> to Home Page.";
      ?>
    </form>
   </body>
</html>
