<?php require('dbconnect.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Baby Caretaker</title>
    <link rel="stylesheet" href="Baby_sitters.css">
</head>

<body>
    <div class="container"></div>
    <nav class="navbar sticky-top navbar-light navbar-expand-lg navbar-scrolled" style="background-color: #f7d022;">
        <a class="navbar-brand" href="#">MagicMaid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servies
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-nowrap bd-highlight" href="Services.php" style="width: 8rem;">Services<span class="badge badge-primary">All</span></a>
                        <a class="dropdown-item" href="House_maid.php">House Maid</a>
                        <a class="dropdown-item" href="Cooking_maid.php">Cooking Maid</a>
                        <a class="dropdown-item" href="Baby_Caretaker.php">Baby Caretaker</a>
                        <a class="dropdown-item" href="Domestic_helper.php">Domestic Help</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact_Us.php">Contact Us</a>
                </li>


            </ul>
        </div>
        <?php

            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "<span style='text-transform:uppercase;'>WELCOME $_SESSION[username] &nbsp; </span> <a href='Logout.php' class='btn btn-dark' tabindex='-1' role='button' aria-disabled='true'>LOGOUT</a>";
            }
            else
            {
                echo "
                <div class='sign-in-up'>
                    <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                    <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                </div>";
            }

        ?>
    </nav>
    <div class="housemaid">
        <h2 class="h1"><span>Baby Caretaker</span></h2>
        <p class="descriptionHouse">Book a professional housekeeper for your daily chores</p>
        <a href="Booking.php" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">BOOK NOW</a>
    </div>














    <div class="why_choose_us">
        <h2 class="h">Why Choose us</h2>
        <div class="card-group">
            <div class="card5" style="width: 18rem;">
                <img src="Tranned.jpg" class="card-img-top" alt="...">
                <div class="card-body-5">
                    <h5 class="card-title-5">Trained and Reliable</h5>
                    <p class="card-text-5">Baby Caretaker Services in Pune If you're looking for a Baby Caretaker services in Pune, we're here to help. As a leading babysitter agency in Pune, we provide all kinds of babysitting services. Whether you want someone to look after your child while you work or want peace of mind knowing that your little one is being looked after, we can help. We offer our services not only to families in Pune but also in other cities such as Mumbai.</p>
                </div>
            </div>
            <div class="card6" style="width: 18rem;">
                <img src="Pricing.jpg" class="card-img-top" alt="...">
                <div class="card-body-6">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5 class="card-title-5">Professional & Experienced</h5>
                    <p class="card-text-5">Our professional and experienced nannies in Pune will take care of any task that comes their way with ease and comfortability. They are trained to handle every situation that may come their way, whether it be feeding time or bath time. The best part is that you can rest assured that your child will be safe with them because they have been thoroughly screened before being hired. This means that your children's safety is guaranteed!</p>
                </div>
            </div>
            <div class="card7" style="width: 18rem;">
                <img src="Support.jpg" class="card-img-top" alt="...">
                <div class="card-body-7">
                    <h5 class="card-title-5">Customer Support</h5>
                    <p class="card-text-5">Our executives will always be there to hear you out and solve your issues. our nannies are educated in current methods to ensure your kids are content and well-cared-for. They have an eye for detail. They'll be sure to keep an eye on your child at all times so that you can focus on other things without worrying about their well-being.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="index.php">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>
    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="index.php">
                <h2>
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>
    </div>
    <div id="footer" class="container6">
        <footer class="socialmedia">
            <a href="https://www.instagram.com/" target="_blank">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://twitter.com/" target="_blank">
                <ion-icon name="logo-twitter"></ion-icon>
            </a></span>
            <a href="https://www.facebook.com/" target="_blank">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="https://www.youtube.com/" target="_blank">
                <ion-icon name="logo-youtube"></ion-icon>
            </a><br>
            <a href="tel:9325823612">
                +91 9325823612
            </a>

            <p class="rights">&copy; 2023 All rights reserved</p>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function popup(popup_name) 
        {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }
        }
    </script>



</body>

</html>