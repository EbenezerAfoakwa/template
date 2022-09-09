<!doctype html>
<html lang="en">

<head>
  <title>Lad Brothers Car Rent Website</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="gallary.css">

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
      /* text-transform: uppercase; */
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
      background-color: #161e26c7;
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

<body>
  <header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container" style="position:relative; z-index:10000">
        <a href="../index.html" class="navbar-brand"><img src="../images/ladlogo.jpg" alt="">Lad Brothers</a>

        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="menu-icon-bar"></span>
          <span class="menu-icon-bar"></span>
          <span class="menu-icon-bar"></span>
        </button>

        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li><a href="#" class="nav-item nav-link">About Us</a></li>
            <li class="dropdown">
              <a href="gallary.php" class="nav-item nav-link" data-toggle="dropdown">Category</a>
              <div class="dropdown-menu">
                <a href="gallary.php" class="dropdown-item">Economy</a>
                <a href="gallary.php" class="dropdown-item">Compact</a>
                <a href="gallary.php" class="dropdown-item">Premium</a>
              </div>
            </li>
            <li><a href="tel:0240263545" class="nav-item nav-link">+233240263545</a></li>
            <li><a href="../users/logins/login.php" class="nav-item nav-link">Sign In</a></li>
            <li><a href="../admins/logins/index.php" class="nav-item nav-link">
                <button class="button-48" role="button"><span class="text" style="font-size: 16px;">Admins Only</span></button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <img src="../images/cq5dam.web.750.300.webp" alt="" style="width: 100%; ">
  </header>




  <main>

    <div class="insideheader">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="header-text">
              <div align="left">

                <div class="banner1">
                  <div class="typed_wrap">
                    <h1 style="color: #40514e;"><span class="typed"></span></h1>

                  </div>
                </div>


                <h2 style="color: #40514e;">Luxury Cars at
                  low-cost, starts <span style="color: #0AA1DD;">270 cedis / day</span> </h2>

                <h3 style="color: #40514e;">LAD BROTHERS CAR GUIDE</h3>
              </div>

            </div>
          </div>




        </div>
      </div>
    </div>


    <div class="message">
      <div class="container">


        <div id="card" class="row">
          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>ECONOMY</u>
              </h4>

              <p style="font-size:13px; ">Mitsubishi Mirage or similar</p>

              <img src="../images/economy.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>

            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>COMPACT</u>
              </h4>

              <p style="font-size:13px; ">Nissan Versa or similar</p>

              <img src="../images/compact.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>5 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>PREMIUM</u>
              </h4>

              <p style="font-size:13px; ">Chevrolet Impala or similar</p>

              <img src="../images/premium.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>
        </div>







        <div id="card" class="row">
          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>ECONOMY</u>
              </h4>

              <p style="font-size:13px; ">Mitsubishi Mirage or similar</p>

              <img src="../images/economy.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>

            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>COMPACT</u>
              </h4>

              <p style="font-size:13px; ">Nissan Versa or similar</p>

              <img src="../images/compact.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>5 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>PREMIUM</u>
              </h4>

              <p style="font-size:13px; ">Chevrolet Impala or similar</p>

              <img src="../images/premium.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>
        </div>







        <div id="card" class="row">
          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>ECONOMY</u>
              </h4>

              <p style="font-size:13px; ">Mitsubishi Mirage or similar</p>

              <img src="../images/economy.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>

            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>COMPACT</u>
              </h4>

              <p style="font-size:13px; ">Nissan Versa or similar</p>

              <img src="../images/compact.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>5 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>PREMIUM</u>
              </h4>

              <p style="font-size:13px; ">Chevrolet Impala or similar</p>

              <img src="../images/premium.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>
        </div>








        <div id="card" class="row">
          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>ECONOMY</u>
              </h4>

              <p style="font-size:13px; ">Mitsubishi Mirage or similar</p>

              <img src="../images/economy.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>

            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>COMPACT</u>
              </h4>

              <p style="font-size:13px; ">Nissan Versa or similar</p>

              <img src="../images/compact.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>5 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>




          <div class="col-lg-4">
            <div class="box" align="center">
              <h4>
                <u>PREMIUM</u>
              </h4>

              <p style="font-size:13px; ">Chevrolet Impala or similar</p>

              <img src="../images/premium.jpg" alt="" style="width: 100%;">

              <div style="font-size: 13px; margin-bottom: 30px;">
                <span><i class="fa-solid fa-network-wired fa-sm" style="color: #65696b;"></i>
                  Automatic</span> <span><i class="fa-solid fa-user fa-sm" style="margin-left: 10px; color: #65696b;"></i>4 People</span> <span><i class="fa-solid fa-bag-shopping fa-sm" style="margin-left: 10px;color: #65696b;"></i>2Bags</span>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>










    <div class="popular-cars">
      <div class="container">

        <h4>AVAILABLE CARS</h4>

        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="../images/economy.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/compact.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/premium.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/economy.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/compact.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/premium.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/economy.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/compact.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/premium.jpg" height="400" width="500" alt="" />
            </div>
            <div class="slide">
              <img src="../images/economy.jpg" height="400" width="500" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>








    <div class="container">
      <h4>LAD BROTHERS CAR RENTAL OPTIONS</h4>

      <br>
      <p style="text-align: justify;">
        No matter your circumstances, you can find affordable car rental options at Avis. Sedans are always a great option, especially for saving on gas, but sometimes you need more storage room, comfort, seating, power—and the list goes on. Browse through rental car classes like SUVs, vans, pickup trucks, and luxury cars to find your ideal ride
      </p>

      <p style="text-align: justify;">
        Choose various rental car types with confidence knowing that Avis regularly adds new vehicles to the fleet and meticulously maintains every car. Avis offers a wide variety of vehicle makes and models, browse our Chevrolet lineup to see many of the exciting rental options available to you. Find the best of the best in our luxury car rentals, which frequently feature premium options like heated seats and state-of-the-art infotainment systems. Available car classes vary by location and reservation date, but the sooner you book, the more options you’ll have. Discover the available cars in your area by adding in your destination, pickup date, and return date. Browse and book a car rental with Avis online today.
      </p>
    </div>



  </main>




  <footer>
    <div class="footer" style="margin-top: 100px;">
      <div class="container">
        <p>
          Copyright © 2022 All Rights Reserved by Ebenezer Afoakwa.
        </p>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js" integrity="sha512-mc/en2cJGERQ7tbCknGfDfDqGbOze0Cl7FQzmRmhWXOOA565kXOCf70fELatOAipHBd/Kk0VmSsyQTh9UkHU+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://kit.fontawesome.com/93327aea62.js" crossorigin="anonymous"></script>
  <script src="gallary.js"></script>

</body>

</html>