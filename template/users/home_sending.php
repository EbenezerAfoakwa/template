<?php

include "home_conn.php";

$image = $first_name = $last_name = $contact = $idtype = $idnumber = $pdate = $plocation = $ddate = $dlocation  = $category =  $tcar = $icheck  = $bscratch = $pmethod = $amount = $apayment = '';
$errors = array('image' => '', 'first_name' => '', 'last_name' => '', 'contact' => '', 'idtype' => '', 'idnumber' => '', 'pdate' => '',  'plocation' => '',  'ddate' => '',  'dlocation', 'category' => '', 'tcar' => '', 'icheck' => '', 'bscratch' => '',  'pmethod' => '',  'amount' => '',  'apayment' => '',);



// the path to store the uploaded image


if (isset($_POST['submit'])) {

    $image = mysqli_real_escape_string($conn, $_FILES['image']['name']);

    // set upload save location
    $target = "../../uploads/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);



    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $idtype = mysqli_real_escape_string($conn, $_POST['idtype']);
    $idnumber = mysqli_real_escape_string($conn, $_POST['idnumber']);
    $pdate = mysqli_real_escape_string($conn, $_POST['pdate']);
    $plocation = mysqli_real_escape_string($conn, $_POST['plocation']);
    $ddate = mysqli_real_escape_string($conn, $_POST['ddate']);
    $dlocation  = mysqli_real_escape_string($conn, $_POST['dlocation']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $tcar = mysqli_real_escape_string($conn, $_POST['tcar']);
    $icheck = mysqli_real_escape_string($conn, $_POST['icheck']);
    $bscratch  = mysqli_real_escape_string($conn, $_POST['bscratch']);
    $pmethod = mysqli_real_escape_string($conn, $_POST['pmethod']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $apayment = mysqli_real_escape_string($conn, $_POST['apayment']);



    // create sql
    $sql = "INSERT INTO forms(image,first_name,last_name,contact,idtype,idnumber,pdate,plocation,ddate,dlocation,category,tcar,icheck,bscratch,pmethod,amount,apayment ) VALUES('$image','$first_name','$last_name','$contact','$idtype','$idnumber','$pdate', '$plocation','$ddate','$dlocation','$category','$tcar','$icheck','$bscratch','$pmethod',$amount,$apayment )";

    // save to db and check

    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: thanks/thank_you.php");
    } else {
        header("Location: home.php");
    }




    // Now lets move the uploaded image into the folder: images
    // move_uploaded_file($_FILES['image']['tmp_name'], $target);
      

    // Now lets move the uploaded image into the folder: images
    // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    //     header("Location: thank_you.php");
    // } else {
    //     header("Location: home.php");
    // }
} // end POST check