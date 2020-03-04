<html>
<head><title> Hospital Database ** Add New staff </title></head>
  <body>
    <h2> Add a new person </h2>
    <from action = "insertStaff.php" method = post>
      Person Id: <input type = text name = "id" size = 6><br><br>
      Person Name: <input type = text name = "name" size = 20><br><br>
      Person Address: <input type = text name = "address" size = 20><br><br>
      Person Dob: <input type = text name = "dob" size = 10><br><br>
      Staff duty: <input type = text name = "duty" size = 10><br><br>
      Staff wage: <input type = float name = "wage"><br><br>
      Staff hours: <input type = float name = "hours"><br><br>
      <input type = submit name = "Submit" value = "Insert"><form>
   </body>
</html>
