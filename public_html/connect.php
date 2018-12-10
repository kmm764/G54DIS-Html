
<?php
error_reporting(-1);
ini_set('display_errors', 'On');
// Settings used to connect to the database:

$servername = 'mysql.cs.nott.ac.uk';
$username = 'psxchk';
$password = '123456';
$db_name = 'psxchk';

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL, error codes: " . mysqli_connect_errno();
#else echo "Successfully connected to server";
?>
