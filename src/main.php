<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="jumbotron text-center">
    <h1> Hospital Database Application </h1>
  </div>
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
              <h3> Staff adjustments </h3>
              <ul>
                <li><a href= "insert/insert_Staff.php"> Add a staff member</a></li>
                <li><a href= "update/update_Staff.php"> Update records for a staff member</a></li>
                <li><a href= "delete/delete_Staff.php"> Delete a staff member</a></li>
                <li><a href= "assign/assign_Staff.php"> Assign a Staff member to a room</a></li>
                <li><a href= "remove/remove_Staff.php"> Remove a Staff assigned to a room</a></li>
                <li><a href= "list/All_Assignedstaff.php"> Show all staff assigned to a room</a></li>
                <li><a href= "list/All_Staff.php"> Show all staff records</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
              <h3> Patient adjustments </h3>
              <ul>
                <li><a href= "insert/insert_patient.php"> Add a patient</a></li>
                <li><a href= "update/update_Patient.php"> Update records for a patient</a></li>
                <li><a href= "delete/delete_Patient.php"> Delete a patient</a></li>
                <li><a href= "list/All_Patient.php"> Show all patient records</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
              <h3> Room and Section adjustments </h3>
              <ul>
                <li><a href= "insert/insert_Section.php"> Add a section</a></li>
                <li><a href= "delete/delete_Section.php"> Delete a section</a></li>
                <li><a href= "update/update_Section.php"> Update a section details</a></li>
                <li><a href= "insert/insert_Room.php"> Add a room to a section</a></li>
                <li><a href= "delete/delete_Room.php"> Delete a room from a section</a></li>
                <li><a href= "update/update_room.php"> Update room details</a></li>
                <li><a href= "list/All_Section.php"> Show all section </a></li>
                <li><a href= "list/All_Room.php"> Show all rooms </a></li>
              </ul>
            </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
