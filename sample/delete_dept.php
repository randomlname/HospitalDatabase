<html>
<head><title>University of Wendy</title></head>
<body>



<?php

if(isset($_COOKIE["username"]))
{

   echo "<form action=\"deletedept.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];	

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   
   $sql = "select dname from DEPT"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Department Name: <select name=\"dname\">";
      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[dname]'>$val[dname]</option>"; 
	 
      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"Delete\">"; 
   }
   else
   {
      echo "<p>Umm...you may want to enter some data. ;) </p>"; 
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}
?>


 
</body>
</html>
