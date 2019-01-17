<?php

require_once './connect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
$role = 2;

//retrieve only the data under the username column that has the same value as username variable
$sql = "SELECT * FROM users WHERE username = '$username' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	die("user_exists");
} else {
	// proceed adding data to DB
	$sql_insert = "INSERT INTO users (firstname, lastname, email, address, username, password, roles_id) VALUES ('$firstname', '$lastname', '$email', '$address', '$username', '$password', '$role')";
	$result = mysqli_query($conn, $sql_insert);

}


mysqli_close($conn);







?>