<?php

$conn = new mysqli('localhost', 'root', '', 'users');

if($conn->connect_error) {
	echo "there was an error:" . $conn->connect_error;
} 



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phoneNumber = $_POST['phoneNumber'];

    
 $sql =  "INSERT INTO personInfo(firstname, lastname, phonenumber) VALUES ('$fname', '$lname', '$phoneNumber')";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}




?>