<html>
<head><title> Hospital Database ** Add New Room </title></head>
  <body>
    <h2> Add a new room </h2>
    <form action="insertRoom.php" method=post>
      Room Number: <input type=text name="room_number" size=3><br><br>
      Room # of Patients: <input type=int name="number_patients"><br><br>
      Room Booked: <input type=int name="booked"><br><br>
      Room section Name: <input type=text name="section_name" size=10><br><br>
      <input type=submit name="Submit" value="Insert">
    </form>
   </body>
</html>
