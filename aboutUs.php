<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Turmoil Tax| About Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png" />
<body>
<?php include("includes/header.php"); ?>
<!-- Content -->
<section id = "bottom">
<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <h1 style="color: black">About us</h1>
    <div
     class="col-lg-3">
        <div class="well">
            <ul class="nav ">
                <li><a href="index.php"><i class="fa fa-arrow-circle-right fa-fw"></i>
                HOME</a></li>
                <li class="li-active"><a href="aboutUs.php"><i class="fa fa-arrow-circle-right fa-fw"></i>
                ABOUT US</a></li>
                <li><a href="services.php"><i class="fa fa-arrow-circle-right fa-fw"></i>
                SERVICES</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right fa-fw"></i>
                TAX SECRETS</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right fa-fw"></i>
                NEWSLETTER</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right fa-fw"></i>
                TAX GUIDE</a></li>                                       
            </ul>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="well">
            <h3 align="center">The Answer to All Your Tax Compliance Needs</h3>
            <p ><strong><em>E-TAX </em></strong>is there for every step of your tax journey, meeting each need of each stakeholder in your tax department with innovative, expert-backed solutions. You’ll be equipped with the intelligence, technology and expertise you need to find answers you can trust.</p>

         <hr>
       <h3 align="center" >Your Business is our business</h3>
<p>With <em>E-TAX </em>, it is much easier to work together as a team and we have found simpler ways to do our tasks. It focuses on the details that firms require to achieve work flow efficiency, accuracy and profitability.We will also guide you on understanding the necessary fundamentals that will help you meet compliance requirements, improve workflow efficiency and grow your business.</p>
        </div>
    </div>        
</div>
</section>
<!-- /Content -->
<?php include("includes/footer.php");?>
    <!-- Back To Top -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            var offset = 300;
            var duration = 500;
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({ scrollTop: 0 }, duration);
                return false;
            })
        });
    </script>
    <!-- /top-link-block -->
    <!-- Jscript -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
</body>
</html>
