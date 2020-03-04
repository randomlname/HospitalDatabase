<html>
<head><title> Hospital Database ** Add New Patient </title></head>
  <body>
    <h2> Add a new Patient </h2>
    <from action = "insertpatient.php" method = post>
      Patient Id: <input type = text name = "id" size = 6><br><br>
      Patient Name: <input type = text name = "name" size = 20><br><br>
      Patient Address: <input type = text name = "address" size = 20><br><br>
      Patient Dob: <input type = text name = "dob" size = 20><br><br>
      Patient Prioritylevel: <input type = int name "priority_level"><br><br>
      Patient Reason: <input type = string name = "reason" size = 30><br><br>
      <input type = submit name = "Submit" value = "Insert"><form>

   </body>
</html>
