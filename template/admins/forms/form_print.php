<?php 
include "user_conn.php";
$id = $_GET['id'];


$sql = "";

$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: forms_db.php");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>