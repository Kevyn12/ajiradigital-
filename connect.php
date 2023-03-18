<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email  = $_POST['Email'];
$Password = $_POST['Password'];

if(isset($Firstname) || isset($Lastname) || isset($Email) || isset($Password))
{
	// rest of the code
}

//Database connection
$conn = new mysqli('localhost','root','','Ajiradigital-');
if($conn->connect_error){
	die('connection failed :'.$conn-conect_error);
}else{
	$stmt = $conn->prepare("insert into ajiradb(Firstname, Lastname, Email, Password)
	values(?, ?, ?, ?)");
	$stmt->bind_param("ssss",$Firstname, $Lastname, $Email, $Password);
	$stmt->execute();
	echo"registration successful";
	$stmt->close();
	$conn->close();
}

	?>
