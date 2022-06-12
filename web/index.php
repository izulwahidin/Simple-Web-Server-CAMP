<?php
phpinfo();die();
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("KO: " . mysqli_connect_error());
}else{
	die("OK");
}