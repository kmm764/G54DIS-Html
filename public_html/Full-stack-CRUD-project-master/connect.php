<?php
error_reporting(-1);
ini_set('display_errors', 'On');
// Settings used to connect to the database:

$servername = 'mersey.cs.nott.ac.uk';
$username = 'psxchk';
$password = 'F0rest!';
$db_name = 'psxchk';

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL, error code: " . mysqli_connect_errno();
//else echo "Successfully connected to server";
?>
