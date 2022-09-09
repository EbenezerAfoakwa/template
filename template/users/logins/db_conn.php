<?php 
// Local server connection

//connect to database
$conn = mysqli_connect('localhost', 'afoakwa', '123', 'election_project');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}











// Online server connection

//connect to database
// $conn = mysqli_connect('localhost', 'u268896278_afoakwa2', 'Afoakwa45', 'u268896278_project_users');

// check connection
// if(!$conn){
//     echo 'Connection error: ' . mysqli_connect_error();
// }

