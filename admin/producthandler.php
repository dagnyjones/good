<?php

include ("../includes/connect.php");

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];


$image = $_FILES['file  ']['name'];
$target = "uploads";
$file_path = $target.basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "uploads/$file_name";

move_uploaded_file($file_tmp, $file_store);

$sql = "INSERT INTO product (name, price, image, description, catID) VALUES('$name', '$price', '$image', '$description', '$category')";

$conn-> query($sql);

?>