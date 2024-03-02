
<?php require('dbconnect.php');
session_start();

if (isset($_POST['name'], $_POST['email'], $_POST['maid_type'],$_POST['service'],$_POST['address'], $_POST['date'], $_POST['time']))
{
    $query1="INSERT INTO `bookings`(`name`, `email`, `maid_type`, `service`, `address`, `date`, `time`) VALUES ('$_POST[name]','$_POST[email]','$_POST[maid_type]','$_POST[service]','$_POST[address]','$_POST[date]','$_POST[time]')";
    mysqli_query($con, $query1);
    echo "
                <script>
                alert('Maid Booked Successfully');
                window.location.href='index.php';
                </script>
                ";
}
    

 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Booking</title>
    <link rel="stylesheet" href="Booking.css">
    <style>
    body {
      background-color: #ffffff;
      font-family: sans-serif;
    }
    h1 {
      text-align: center;
      font-size: 2em;
      font-weight: bold;
    }
    form {
      width: 500px;
      margin: 0 auto;
      text-align: center;
    }
    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #000000;
      color: #ffffff;
      font-weight: bold;
      cursor: pointer;
      
    }
  </style>
  <style>
        .inner_services{
            display:none;
            
        }  
        
    </style>
</head>

<body>
    <header>
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

            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                echo "<span style='text-transform:uppercase;'>WELCOME $_SESSION[username] &nbsp; </span> <a href='Logout.php' class='btn btn-dark' tabindex='-1' role='button' aria-disabled='true'>LOGOUT</a>";
            } else {
                echo "
                <div class='sign-in-up'>
                    <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                    <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                </div>";
            }

            ?>
        </nav>
    </header>
    <div>
        <h1>Booking Form</h1>
        <form action="Booking.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <select name="maid_type" required>
                <option value="Quick Maid">Quick Maid</option>
                <option value="Regular Maid">Regular Maid</option>
            </select>
            <select name="service" required>
                <option value="House maid">House Maid</option>
                <option value="Cooking Maid">Cooking Maid</option>
                <option value="Baby Caretaker">Baby Caretaker</option>
                <option value="Domestic Help">Domestic Help</option>
            </select>
            <input type="text" name="address" placeholder="Enter Your Address" required>
            <input type="date" name="date" required>
            <input type="time" name="time" required>
            <button type="submit" class="btn btn-warning btn-lg btn-block">Book Now</button>
            <br>
            <br>
            <br>
        </form>
    </div>
    <div class="popup-container" id="login-popup">
            <div class="popup">
                <form method="POST" action="index.php">
                    <h2>
                        <span>USER LOGIN</span>
                        <button type="reset" onclick="popup('login-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="E-mail or Username" name="email_username" required>
                    <input type="password" placeholder="Password" name="password" required>
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
                    <input type="text" placeholder="Full Name" name="fullname" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" class="register-btn" name="register">REGISTER</button>
                </form>
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


    <!-- For PopUp Window for Login and Regrestration-->
    <script>
        function popup(popup_name) {
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