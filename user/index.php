<?php
include("../php/connect.php");
include("../php/session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Tax | Home</title>
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

    <div class="col-lg-3">
        <div class="well">
             <h2 style="color: black">Applications
</h2>

<p>Select an application from the list.</p>
            <ul class="nav ">
                <li><a href="index.php"><i class="fa fa-folder-open fa-fw"></i>
                File Vault</a></li>
                <li class="li-active"><a href="aboutUs.php"><i class="fa fa-flash fa-fw"></i>
                Tax Organizer</a></li>
                <li><a href="services.php"><i class="fa fa-calendar fa-fw"></i>
                Financial Calculators</a></li>
                <li><a href="#"><i class="fa fa-magic fa-fw"></i>
                Tax Secrets</a></li>
                <li><a href="#"><i class="fa fa-book fa-fw"></i>
                Newsletter</a></li>
                <li><a href="#"><i class="fa fa-random fa-fw"></i>
                Tax guide</a></li>                                       
            </ul>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="well">
            <h2 style="font-size:25px;">FAQ's</h2>
            <p >Helpful information about common tasks. <a href="faq.php" align="right">See full Help Section</a></p>
 <ul class="nav ">
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>
                How do I upload a file?</a></li>
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>
                How do I download a file?</a></li>
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>          
                How do I know when a file has been uploaded to me?</a></li>
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>
                How do I cancel my membership with this firm?</a></li>
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>
                What happens when I cancel my membership?</a></li>
                <li><a href="#"><i class="fa fa-arrow-right fa-fw"></i>
                How do I change my password?</a></li>
                 </ul>
</p>
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
