<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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

        <link rel="stylesheet" href="home_admin.css">


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
        </style>
    </head>

    <body style="width: 98%;">
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
                                <i class="fa-solid fa-circle-user fa-2x " style="margin-top: 0px; color: #161e26; "></i>
                                <p style="font-size: 16px; font-weight:600; margin-top:5px"><?php echo $_SESSION['name']; ?></p></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Help</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="logins/login.php">Logout</a></li>
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
                            <a class="navbar-brand" href="../index.html" style="color: #fff; font-size:16px; margin: 4px 0px; display:flex;"><img src="../images/ladlogo.jpg" alt="" style="width: 45px; height:45px; margin-top:-13px">
                                Lad Brothers
                            </a>
                        </div>
                    </div>
                </div>
               
                <!-- Main Menu -->
                <div class="side-menu-container">
                    <ul class="nav navbar-nav">
                    <li><a href="f_regs/registration.php"><i class="fa-brands fa-wpforms fa-lg" style="margin-right: 5px;"></i>Registration</a></li>
                        <li><a href="home.php"><i class="fa-solid fa-window-restore fa-lg" style="margin-right: 3px;"></i></i>Dashboard</a></li>
                        <li><a href="users/users_db.php"><i class="fa-brands fa-wpforms fa-lg" style="margin-right: 5px;"></i>Users_DB</a></li>
                        <li><a href="forms/forms_db.php"><i class="fa-brands fa-wpforms fa-lg" style="margin-right: 5px;"></i></i>Forms_DB</a></li>
                        <li><a href="logins/signup.php"><i class="fa-solid fa-user fa-lg" style="margin-right: 5px;"></i></i>Create User</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <!--main content wrapper-->
        <div class="mcw">
            <!--navigation here-->
            <!--main content view-->
          
            <hr>









            <div style="margin-top:15%" align="middle">
            <h1>Welcome </h1>
            <br>
            <p style="font-size: 25px; font-weight:600; margin-top:0px"><?php echo $_SESSION['name']; ?></p>
            </div>
           





        </div>














        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script src="admin.js"></script>
    </body>

    </html>





<?php
} else {
    header("Location: users.php");
    exit();
}
?>