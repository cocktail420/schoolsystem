<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
	<title></title>
</head>
<body>
<div style="text-align: center;" class="container container-fluid">
	<div class="alert alert-success">
		<u>
	<h2><strong>LOG IN</strong></h2>
	</u>
	<p style="color: red;">Your employee number is your username and ID number is your password</p>
	<form class="form-horizontal " method="post" action="staff.php">
		
		<div class="form-group col-lg-6">
			<label>firstname:</label>
			<input type="text" placeholder="firtsname" class="form-control" name="firstname">
		</div>
	<div class="form-group col-lg-6">
			<label>lastname:</label>
			<input type="text" placeholder="lastname" class="form-control" name="lastname">
		</div>
	<div class="form-group col-lg-6">
			<label>gender:</label>
			<input type="text" placeholder="gender" class="form-control" name="gender">
		</div>
	<div class="form-group col-lg-6">
			<label>phone_number:</label>
			<input type="text" placeholder="phone_number" class="form-control" name="phone_number">
		</div>
<div class="form-group col-lg-6">
			<label>email:</label>
			<input type="text" placeholder="email" class="form-control" name="email">
		</div>



<input type="submit" class="btn btn-primary" name="submit" value="submit">

	</form>
</div>
</body>
</html>



	<?php


	
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinny";


$conn = new mysqli($servername, $username, $password, $dbname);


// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "connection successfuly";
// //create a database
// $sql = 'CREATE DATABASE vinny';
// if ($conn->query($sql)=== true) {
// 	# code...
// 	echo "database created";
// }
// else{
// 	echo "failed :" .$conn->error;
// }
//creating a table
// $sql = "CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// admission_number INT(22),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//  if ($conn->query($sql)===true) {
//  	# code...
//  	echo "table created";
//  }
//  else{
//  	echo "error";
//  }

// $sql = "CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// gender VARCHAR (50),
// phone_number INT(20),
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
//  if ($conn->query($sql)===true) {
//  	# code...
//  	echo "table created";
//  }
//  else{
//  	echo "error";
//  }

if (isset($_POST["submit"])) {
	
	$firstname = $_POST["firstname"];
	
	$lastname = $_POST["lastname"];

	$gender = $_POST["gender"];
		
	$phone_number= $_POST["phone_number"];
	
	$email= $_POST["email"];
	

	
	


$sql = "INSERT INTO staff ( firstname, lastname, gender, phone_number, email)
VALUES ('$firstname', '$lastname', '$gender', '$phone_number','$email')";

 if ($conn->query($sql)===true) {

  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$conn->close();
}

?>
	
	</div>
</div>
<footer>
	<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
</body>
</html>