<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$firstname = $_POST['Name'];
$middlename = $_POST['Middlename'];
$lastname = $_POST['Lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE users SET Name='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', username='$username', password='$password' 
WHERE username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>