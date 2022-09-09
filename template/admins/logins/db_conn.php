<?php
// Local server connection

$sname= "localhost";
$unmae= "afoakwa";
$password = "123";

$db_name = "election_Admins";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}












// Online server connection
// $sname = "localhost";
// $unmae = "u268896278_afoakwa1";
// $password = "Afoakwa45";

// $db_name = "u268896278_project_admin";

// $conn = mysqli_connect($sname, $unmae, $password, $db_name);

// if (!$conn) {
// 	echo "Connection failed!";
// }

