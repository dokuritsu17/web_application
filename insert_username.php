<?php
$cn = mysqli_connect('localhost','root','root');
if (!$cn) {
	echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'chat')) {
	echo 'Database not selected';
}

$username = $_GET['username'];

$sql = "INSERT INTO users
	(username)
		VALUES
	('$username')";
$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));

































?>