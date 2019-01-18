<?php 

// $host = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'ecom_db';

$host = 'db4free.net';
$username = 'jconstore';
$password = '@Password';
$dbname = 'jconstore';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>