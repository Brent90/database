<?php

$conn = new mysqli('localhost', 'root', '', 'users');

if($conn->connect_error) {
	echo "there was an error:" . $conn->connect_error;
} 

$sql = "SELECT * FROM personInfo ORDER BY lastname";

$result = $conn->query($sql);



 echo "<table>";
 echo "<th>Firstname</th><th>Lastname</th><th>Phone Number</th>";         

 while ($row = $result->fetch_assoc()) {  
   
  echo"<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['phonenumber']."</td></tr>";}

echo"</table>";

 

$conn->close();
            

?>


