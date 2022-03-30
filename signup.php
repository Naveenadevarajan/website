<?php

$conn = mysqli_connect("localhost", "root", "", "signup");
  
// Check connection
if($conn === false){
	die("ERROR: Could not connect. " 
		. mysqli_connect_error());
}
  
// Taking all 6 values from the form data(input)
    $firstName = $_POST['Firstname'];
	$lastName = $_POST['Lastname'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
    $conpassword = $_POST['Confirmpassword'];
	$number = $_POST['Phone'];

  
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO form  VALUES ('$firstName', '$lastName','$email','$password','$conpassword','$number')";
  
if(mysqli_query($conn, $sql)){
	echo "<h3>data stored successfully</h3>"; 

} else{
	echo "ERROR: Hush! Sorry $sql. " 
		. mysqli_error($conn);
}
  
// Close connection
mysqli_close($conn);
?>