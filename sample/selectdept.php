<?php

if(isset($_COOKIE["username"]))
{
   $username = $_COOKIE["username"]; 
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($conn->connect_errno)
   {
      echo "Connection issues";
      exit; 
   }

   echo "<p>$_POST[dname]</p>";
   $sql = "select * from DEPT where dname='".$_POST[dname]."'";
   $result = $conn->query($sql); 
   if($result->num_rows != 0) 
   { 	
      echo "<table border=1>";
      $rec = $result->fetch_assoc();
	 
      echo "<tr>";
      echo "<td>$rec[dname]</td>";
      echo "<td>$rec[loc]</td>";
      echo "<td>$rec[id]</td>"; 
      echo "</tr>";
	
      echo "</table>";
   

      $sql = "select * from COURSE where dname='".$_POST[dname]."'";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
	 echo "<br><br> Courses offered by $rec[dname]: <br><br>";
	 echo "<table border=1>";
	 while($rec = $result->fetch_assoc())
	 { 
	    echo "<tr>";
	    echo "<td>$rec[cno]</td>";
	    echo "<td>$rec[cname]</td>";
	    echo "<td>$rec[crhrs]</td>"; 
	    echo "</tr>";
	 }
	 echo "</table>"; 
      }
   
      else {
	 echo "<p> The $_POST[dname] department currently offers no courses.</p>";
      }
   }
   else {
      
      echo "<p>Department name $_POST[dname] does not exist!</p>"; 
   
   }

}
else
{
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}

echo "<a href=\"main.php\">Return</a> to Home Page."; 

?>
