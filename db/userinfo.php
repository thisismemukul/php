<?php

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'userdata');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = " insert into infodata (name, phone, email, msg) 
values ('$name', '$phone', '$email', '$msg')";

echo "$query";
mysqli_query($con,$query );

header('location:index.php');

 ?>