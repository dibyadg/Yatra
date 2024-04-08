<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Yatra</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: white;background:#555555">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Yatra </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu" style="#555555">
              <li> <a href="entercar.php">Add Car</a></li>
               <li> <a href="enterdriver.php"> Add Driver</a></li>
              <li> <a href="clientview.php">View</a></li>

            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garage <span class="caret"></span> </a>
                <ul class="dropdown-menu" style="#555555">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Employee</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
                   
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="bgimg-1">

        </div>
            

<div class="container">
    <section class="services">
        <h1>Our Services</h1>
        <div class="inner">
            <div class="inner-left">
                <img src="assets/img/services.png" alt="">
            </div>
            <div class="inner-right">
                <h2>What We offer?</h2>
                <p>What yatra services offers to customers?

                    
                    <br>
                    Rental services provide customers with a convenient and flexible solution for temporary transportation needs. These services offer a diverse range of vehicles, catering to various preferences and requirements, from compact cars to luxury SUVs. Customers can easily make reservations online, selecting their preferred pickup and drop-off locations. Many car rental companies have branches at airports, ensuring quick access for travelers upon arrival. Rental durations are customizable, allowing customers to rent a vehicle for short trips or longer periods. 
                    
                    </p><span> Car rental services often provide insurance options, such as collision damage waivers and liability coverage, offering peace of mind during the rental period. Additional services, like GPS navigation systems, child safety seats, and roadside assistance, enhance the overall rental experience.   </span>
                </div>
        </div>
    </section>
    


    <section class="contact">
            <h1 class="heading"><span>Contact</span> us </h1>
            <div class="row">
                    <iframe class="map" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Padmakanya%20Multiple%20campus+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
            <form action="">
                <h2>Get In Touch</h2>
                <p>Enter Name</p>
                <input type="name" name="" id=""  placeholder="Name" class="box">
                <p>Enter Email</p>
                <input type="email" placeholder="Email" name="" id="" class="box">
                <p>Enter Contact Number</p>
                <input type="text" placeholder="Contact Details" name="" id="" class="box">
                <br>
                <input type="submit" value="Send Message" class="btn">
                
            </form>
            
            </div>
    </section>





    </div>


    

<section class="footer">
    <div class="container">
        <div class="box-container">
        <div class="box">
            <h3>Our Branches</h3>
            <a href=""><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Kathmandu</a>
            <a href=""><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Pokhara</a>
            <a href=""><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Dharan</a>
            <a href=""><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Heatauda</a>
            <a href=""><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Chitwan</a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href=""><i class="fa fa-arrow-alt-circle-right" aria-hidden="true"></i> Home</a>
            <a href=""><i class="fa fa-arrow-alt-circle-right" aria-hidden="true"></i> Vehicles</a>
            <a href=""><i class="fa fa-arrow-alt-circle-right" aria-hidden="true"></i> Services</a>
            <a href=""><i class="fa fa-arrow-alt-circle-right" aria-hidden="true"></i> Featured</a>
            <a href=""><i class="fa fa-arrow-alt-circle-right" aria-hidden="true"></i> Contact Us</a>    
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <a href=""><i class="fa fa-phone-alt" aria-hidden="true"></i> +977 98888888</a>
            <a href=""><i class="fa fa-phone-alt" aria-hidden="true"></i> +977 97777777</a>
            <a href=""><i class="fa fa-envelope" aria-hidden="true"></i> inquiry@yatra.com</a>
            <a href=""><i class="fa fa-map-location" aria-hidden="true"></i> Head Office - Bagbazar, Kathmandu</a>
            
        </div>

        <div class="box">
            <h3>Our Presence</h3>
            <a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i>facebook</a>
            <a href=""><i class="fa-brands fa-instagram" aria-hidden="true"></i>Instagram</a>
            <a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i>Youtube</a>
        </div>


    </div>
  
</div>
</section>

    
    <!-- Container (Contact Section) -->
    <!-- -->
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col">
                    <h5>© <?php echo date("Y"); ?> Car Rentals || Designed , Developed & Created by Dibya Gyawali and Anuja Neupane</h5>
                </div>
                
            </div>
        </div>
    </footer>
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
</body>

</html>