<html>
<head><title> Hospital Database ** Add New staff </title></head>
  <body>
    <h2> Add a new staff member </h2>
    <from action = "insertStaff.php" method = post>
      Staff Id: <input type = text name = "id" size = 6><br><br>
      Staff Name: <input type = text name = "name" size = 20><br><br>
      Staff Address: <input type = text name = "address" size = 20><br><br>
      Staff Dob: <input type = text name = "dob" size = 10><br><br>
      Staff duty: <input type = text name = "duty" size = 20><br><br>
      Staff wage: <input type = float name = "wage"><br><br>
      Staff hours: <input type = float name = "hours"><br><br>
      <input type = submit name = "Submit" value = "Insert"><form>
   </body>
</html>
