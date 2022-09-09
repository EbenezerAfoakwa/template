<?php 
include "../users/user_conn.php";
$id = $_GET['id'];


$sql = "DELETE FROM forms WHERE id = $id";

$result = mysqli_query($conn, $sql);
if($result) {
    header("Location: forms_db.php");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>