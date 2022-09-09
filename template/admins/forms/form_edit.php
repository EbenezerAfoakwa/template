<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


    <?php

    include "../users/user_conn.php";
    $id = $_GET['id'];

    $image = $first_name = $last_name = $contact = $idtype = $idnumber = $pdate = $plocation = $ddate = $dlocation  = $category =  $tcar = $icheck  = $bscratch = $pmethod = $amount = $apayment = '';
    $errors = array('image' => '', 'first_name' => '', 'last_name' => '', 'contact' => '', 'idtype' => '', 'idnumber' => '', 'pdate' => '',  'plocation' => '',  'ddate' => '',  'dlocation', 'category' => '', 'tcar' => '', 'icheck' => '', 'bscratch' => '',  'pmethod' => '',  'amount' => '',  'apayment' => '',);



    // the path to store the uploaded image


    if (isset($_POST['submit'])) {

        $image = mysqli_real_escape_string($conn, $_FILES['image']['name']);

        // set upload save location
        $target = "../../uploads/" . basename($_FILES['image']['name']);



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
        $sql = "UPDATE `forms` SET `image`='$image',`first_name`='$first_name',`last_name`='$last_name',`idtype`='$idtype',`idnumber`='$idnumber',`pdate`='$pdate',`plocation`='$plocation',`ddate`='$ddate',`dlocation`='$dlocation',`category`='$category',`tcar`='$tcar',`icheck`='$icheck',`bscratch`='$bscratch',`pmethod`='$pmethod',`amount`='$amount',`apayment`='$apayment',`contact`='$contact' WHERE id=$id";

        // save to db and check
        $result = mysqli_query($conn, $sql);


        if ($result) {
            header("Location: form_msg.php");
        } else {
            header("Location: home.php");
        }
    } // end POST check

    ?>


    <!doctype html>
    <html lang="en">

    <head>
        <title>LadBrothers application history</title>

        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="forms_db.css">


        <style>
            /* BUTTON-48 */
            .button-48 {
                appearance: none;
                background-color: #0AA1DD;
                border-width: 0;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-family: Clarkson, Helvetica, sans-serif;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0;
                line-height: 1em;
                opacity: 1;
                outline: 0;
                padding: 1em 2.2em;
                position: relative;
                text-align: center;
                text-decoration: none;
                text-rendering: geometricprecision;
                text-transform: uppercase;
                transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1), background-color 100ms cubic-bezier(.694, 0, 0.335, 1), color 100ms cubic-bezier(.694, 0, 0.335, 1);
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: baseline;
                white-space: nowrap;
                border-radius: 2px;
            }

            .button-48:before {
                animation: opacityFallbackOut .5s step-end forwards;
                backface-visibility: hidden;
                background-color: #161e26;
                clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
                content: "";
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                transform: translateZ(0);
                transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
                width: 100%;
                color: #fff;
            }

            .button-48:hover {
                color: #fff;
            }

            .button-48:hover:before {
                animation: opacityFallbackIn 0s step-start forwards;
                clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
                border-radius: 2px;
                color: #fff;
            }

            .button-48:after {
                background-color: #FFFFFF;
                color: #fff;
            }

            .button-48 span {
                z-index: 1;
                position: relative;
            }

            /* BUTTON-48 */




            @media screen and (max-width: 1500px) {
                body {
                    width: 96%;
                }

                .msb .navbar-brand {
                    color: #fff;
                    margin: 4px 0px;
                    display: flex;
                }

                .header-in {
                    margin-top: 80px;
                }

                .header-in h4 {
                    font-size: 16px;
                    font-weight: 600;
                }

                .mcw .form-in .section h4 {
                    margin-top: -10px;
                    font-weight: 600;
                    font-size: 16px
                }

                .mcw .form-in .section .bcolor2 {
                    display: flex;
                    padding: 8px 10px 8px 10px
                }

                .section {
                    width: 100%;
                    margin-top: 0px;

                }

                .inner {
                    padding: 0px 20px 20px 30px;
                }

                input[type=text],
                select,
                textarea {
                    width: 60%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=number],
                select,
                textarea {
                    width: 60%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */

                }

                input[type=number],
                select,
                textarea {
                    width: 60%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=date],
                select,
                textarea {
                    width: 60%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=file],
                select,
                textarea {
                    width: 100%;
                    padding: 6px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }



                label {
                    width: 175px;
                    color: #65696b;
                }

                .upload{
                    padding-top: 10px;
                    display: flex;
                    display: block;
                   
                }

                .bcolor1 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;

                }

                .bcolor2 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                }
            }

            @media screen and (max-width: 1000px) {
                body {
                    width: 97%;
                }

                .msb .navbar-brand {
                    color: #fff;
                    margin: 4px 0px;
                    display: flex;
                }

                .header-in {
                    margin-top: 80px;
                }

                .header-in h4 {
                    font-size: 16px;
                    font-weight: 600;
                    margin-left: 20px;
                }

                .mcw .form-in .section h4 {
                    margin-top: -10px;
                    font-weight: 600;
                    font-size: 16px
                }

                .mcw .form-in .section .bcolor2 {
                    display: flex;
                    padding: 8px 10px 8px 10px
                }

                .section {
                    width: 100%;
                    margin-top: 0px;

                }

                .inner {
                    padding: 0px 20px 20px 40px;
                }

                input[type=text],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */

                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=date],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=file],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }



                label {
                   width: 100%;
                    color: #65696b;
                  
                }
                .upload{
                    padding-top: 10px;
                    display: flex;
                }


                .bcolor1 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                   

                }

                .bcolor2 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                }
            }

            @media screen and (max-width: 700px) {
                body {
                    width: 97%;
                }

                .msb .navbar-brand {
                    color: #fff;
                    margin: 4px 0px;
                    display: flex;
                }

                .header-in {
                    margin-top: 80px;
                }

                .header-in h4 {
                    font-size: 16px;
                    font-weight: 600;
                    margin-left: 20px;
                }

                .mcw .form-in .section h4 {
                    margin-top: -10px;
                    font-weight: 600;
                    font-size: 16px
                }

                .mcw .form-in .section .bcolor2 {
                    display: flex;
                    padding: 8px 10px 8px 10px
                }

                .section {
                    width: 100%;
                    margin-top: 0px;

                }

                .inner {
                    padding: 0px 20px 20px 40px;
                }

                input[type=text],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */

                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=date],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=file],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }



                label {
                   width: 100%;
                    color: #65696b;
                  
                }
                .upload{
                    padding-top: 10px;
                    display: flex;
                }


                .bcolor1 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                   

                }

                .bcolor2 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                }
            }

            @media screen and (max-width: 500px) {
                body {
                    width: 95%;
                }

                .msb .navbar-brand {
                    color: #fff;
                    margin: 4px 0px;
                    display: flex;
                }

                .header-in {
                    margin-top: 80px;
                }

                .header-in h4 {
                    font-size: 16px;
                    font-weight: 600;
                    margin-left: 20px;
                }

                .mcw .form-in .section h4 {
                    margin-top: -10px;
                    font-weight: 600;
                    font-size: 16px
                }

                .mcw .form-in .section .bcolor2 {
                    display: flex;
                    padding: 8px 10px 8px 10px
                }

                .section {
                    width: 100%;
                    margin-top: 0px;

                }

                .inner {
                    padding: 0px 10px 20px 20px;
                }

                input[type=text],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */

                }

                input[type=number],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=date],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }

                input[type=file],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    /* Some padding */
                    border: 1px solid #ccc;
                    /* Gray border */
                    border-radius: 4px;
                    /* Rounded borders */
                    box-sizing: border-box;
                    /* Make sure that padding and width stays in place */
                    resize: vertical;
                    /* Allow the user to vertically resize the textarea (not horizontally) */
                }



                label {
                   width: 100%;
                    color: #65696b;
                  
                }
                .upload{
                    padding-top: 10px;
                    display: flex;
                }


                .bcolor1 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                   

                }

                .bcolor2 {
                    background-color: #f1f1f1;
                    padding: 5px 10px;
                    margin-top: 10px;
                }
            }

        </style>
    </head>

    <body >
        <nav class="mnb navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="ic fa fa-bars"></i>
                    </button>


                    <div style="padding: 15px 0;">
                        <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
                    </div>

                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display:flex;">
                                <i class="fa-solid fa-circle-user fa-2x " style="margin-top: -3px; color: #161e26; "></i>
                                <p style="font-size: 17px; font-weight:600; margin-top:0px"><?php echo $_SESSION['name']; ?></p></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Help</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../logins/login.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



        <!--msb: main sidebar-->
        <div class="msb">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div class="brand-wrapper">
                        <!-- Brand -->
                        <div class="brand-name-wrapper">
                            <a class="navbar-brand" href="../../index.html" style="color: #fff; margin: 4px 0px; display:flex;"><img src="../../images/ladlogo.jpg" alt="" style="width: 45px; height:45px; margin-top:-13px">
                                Lad Brothers
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Menu -->
                <div class="side-menu-container">
                    <ul class="nav navbar-nav">
                        <li><a href="../f_regs/registration.php"><i class="fa-solid fa-window-restore fa-lg" style="margin-right: 3px;"></i></i>Resets</a></li>
                        <li><a href="users_db.php"><i class="fa-solid fa-print fa-lg" style="margin-right: 5px;"></i>Prints</a></li>
                        <!-- <li><a href="forms_db.php"><i class="fa-brands fa-wpforms fa-lg" style="margin-right: 5px;"></i></i>Prints</a></li> -->
                        <li><a href="../logins/login.php"><i class="fa-solid fa-power-off fa-lg" style="margin-right: 5px;"></i></i>Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <!--main content wrapper-->
        <div class="mcw">
            <!--navigation here-->
            <!--main content view-->
            <div align="center" style="margin-top: 80px;">
                <!-- <img src="../images/lad-brothers-logo.png" alt="" style="width: 200px;"> -->
                <h4 style="font-size: 16px; font-weight:600; ">EDIT USER INFORMATION</h4>
            </div>


            <?php

            $sql = "SELECT * FROM `forms` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>


            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="cv">
                        <div>
                            <div class="inbox">
                                <div class="inbox-sb">

                                </div>
                                <div class="inbox-bx container-fluid">
                                    <div class="section" style="width: 100%;">
                                        <div class="inner">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <h4 style="margin-top: -10px; font-weight:600; font-size:16px">PROFILE INFO</h4>

                                                <div class="bcolor2" style="display:flex; padding:14px 10px 8px 10px">
                                                    <label for="lname">Applicant Image:</label>
                                                    <input type="file" id="image" name="image" required style="padding-left:5px" value="<?php echo $row['image'] ?>">
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="first_name">First name:</label>
                                                    <input type="text" id="first_name" name="first_name" required value="<?php echo $row['first_name'] ?>">
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="last_name">Last Name:</label>
                                                    <input type="text" id="last_name" name="last_name" required value="<?php echo $row['last_name'] ?>">
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="contact">Phone Number:</label>
                                                    <input type="number" id="contact" name="contact" required value="<?php echo $row['contact'] ?>">
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="idtype">Valid ID Type:</label>
                                                    <select name="idtype" id="cars" required>
                                                        <option value="">Select option</option>
                                                        <option value="Ecowas Card" <?php echo ($row['idtype'] == 'Ecowas Card') ? "selected" : ""; ?>>Ecowas Card</option>
                                                        <option value="Voters ID" <?php echo ($row['idtype'] == 'Voters ID') ? "selected" : ""; ?>>Voters ID</option>
                                                        <option value="Driver License" <?php echo ($row['idtype'] == 'Driver License') ? "selected" : ""; ?>>Driver License</option>
                                                        <option value="Passport" <?php echo ($row['idtype'] == 'Passport') ? "selected" : ""; ?>>Passport</option>
                                                    </select>
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="idnumber">Valid ID Number:</label>
                                                    <input type="text" id="idnumber" name="idnumber" required value="<?php echo $row['idnumber'] ?>">
                                                </div>

                                                <h4 style="margin-top: 50px; font-weight:600; font-size:16px">DATA ENTRY</h4>
                                                <div class="bcolor1">
                                                    <label for="pdate">Pick up Date:</label>
                                                    <input type="date" id="pdate" name="pdate" required value="<?php echo $row['pdate'] ?>">
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="plocation">Pick up Location:</label>
                                                    <input type="text" id="plocation" name="plocation" required value="<?php echo $row['plocation'] ?>">
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="ddate">Drop off Date:</label>
                                                    <input type="date" id="ddate" name="ddate" required value="<?php echo $row['ddate'] ?>">
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="dlocation">Drop off Location:</label>
                                                    <input type="text" id="dlocation" name="dlocation" required value="<?php echo $row['dlocation'] ?>">
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="category">Car Category:</label>
                                                    <select name="category" id="cars" required>
                                                        <option value="">Select option</option>
                                                        <option value="Economy" <?php echo ($row['category'] == 'Economy') ? "selected" : ""; ?>>Economy</option>
                                                        <option value="Compact" <?php echo ($row['category'] == 'Compact') ? "selected" : ""; ?>>Compact</option>
                                                        <option value="Premium" <?php echo ($row['category'] == 'Premium') ? "selected" : ""; ?>>Premium</option>
                                                        <option value="Luxury" <?php echo ($row['category'] == 'Luxury') ? "selected" : ""; ?>>Luxury</option>
                                                    </select>
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="tcar">Type of Car:</label>
                                                    <select name="tcar" id="cars" required>
                                                        <option value="">Select option</option>
                                                        <option value="Mercedes" <?php echo ($row['tcar'] == 'Mercedes') ? "selected" : ""; ?>>Mercedes</option>
                                                        <option value="Toyota" <?php echo ($row['tcar'] == 'Toyota') ? "selected" : ""; ?>>Toyota</option>
                                                        <option value="Nissan" <?php echo ($row['tcar'] == 'Nissan') ? "selected" : ""; ?>>Nissan</option>
                                                        <option value="Hundaii" <?php echo ($row['tcar'] == 'Hundaii') ? "selected" : ""; ?>>Hundai</option>
                                                        <option value="Honda" <?php echo ($row['tcar'] == 'Honda') ? "selected" : ""; ?>>Honda</option>
                                                        <option value="BMW" <?php echo ($row['tcar'] == 'BMW') ? "selected" : ""; ?>>BMW</option>
                                                        <option value="Bugati" <?php echo ($row['tcar'] == 'Bugati') ? "selected" : ""; ?>>Bugati</option>
                                                        <option value="Ferrari" <?php echo ($row['tcar'] == 'Ferrari') ? "selected" : ""; ?>>Ferrari</option>
                                                    </select>
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="icheck">Inspection Check:</label>
                                                    <select name="icheck" id="cars" required value="<?php echo $row['icheck'] ?>">
                                                        <option value="">Select option</option>
                                                        <option value="Yes" <?php echo ($row['icheck'] == 'Yes') ? "selected" : ""; ?>>Yes</option>
                                                        <option value="No" <?php echo ($row['icheck'] == 'No') ? "selected" : ""; ?>>No</option>
                                                    </select>
                                                </div>

                                                <div class="bcolor2">
                                                    <label for="bscratch">Body Scratch:</label>
                                                    <select name="bscratch" id="cars" required>
                                                        <option value="">Select option</option>
                                                        <option value="Yes" <?php echo ($row['bscratch'] == 'Yes') ? "selected" : ""; ?>>Yes</option>
                                                        <option value="No" <?php echo ($row['bscratch'] == 'No') ? "selected" : ""; ?>>No</option>
                                                    </select>
                                                </div>

                                                <h4 style="margin-top: 50px; font-weight:600; font-size:16px">PAYMENT METHOD</h4>
                                                <div class="bcolor1">
                                                    <label for="pmethod">Payment Method:</label>
                                                    <select name="pmethod" id="cars" required>
                                                        <option value="">Select option</option>
                                                        <option value="Cash" <?php echo ($row['pmethod'] == 'Cash') ? "selected" : ""; ?>>Cash</option>
                                                        <option value="Mobile Money" <?php echo ($row['pmethod'] == 'Mobile Money') ? "selected" : ""; ?>>Mobile Money</option>
                                                        <option value="Bank Transfer" <?php echo ($row['pmethod'] == 'Bank Transfer') ? "selected" : ""; ?>>Bank Transfer</option>
                                                        <option value="Cheque" <?php echo ($row['pmethod'] == 'Cheque') ? "selected" : ""; ?>>Cheque</option>
                                                    </select>
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="amount">Amount:</label>
                                                    <input type="number" id="amount" name="amount" required value="<?php echo $row['amount'] ?>">
                                                </div>

                                                <div class="bcolor1">
                                                    <label for="apayment">Advance Payment:</label>
                                                    <input type="number" id="apayment" name="apayment" required value="<?php echo $row['apayment'] ?>">
                                                </div>

                                                <br>

                                                <div style="text-align: center;">
                                                    <button type="submit" class="button-48 btn-block" name="submit" style="margin-top: 10px; padding: 14px 42px;"><span class="text">Update</span></button>
                                                </div>

                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-6">

                    <!-- <h4 style="font-size: 16px; font-weight:600; margin-top: -8px">OUR AVAILABLE CARS</h4> -->


                </div>
            </div>


        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script src="forms.js"></script>
    </body>

    </html>





<?php
} else {
    header("Location: users.php");
    exit();
}
?>