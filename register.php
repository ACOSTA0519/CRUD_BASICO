<?php
include("config.php");
include("session.php");

$Name = $_POST['Name'];
$middlename = $_POST['Middlename'];
$lastname = $_POST['Lastname'];
$birthdate = $_POST['Birthdate'];
$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "INSERT INTO users(Name, middlename, lastname, birthdate, username, password) 
VALUES('$Name', '$middlename', '$lastname', '$birthdate', '$username', '$password')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>