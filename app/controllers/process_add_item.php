<?php 

session_start();
require_once './connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$image = "../assets/images/".$_FILES['image']['name']; // store path
move_uploaded_file($_FILES['image']['tmp_name'], "./".$image);

$sql = "INSERT INTO items (name,price,description,image_path,category_id) VALUES ('$name','$price','$description', '$image', '$category_id'); ";

mysqli_query($conn, $sql);

header('Location: ../views/catalog.php');











?>