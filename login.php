<?php
session_start();
include("php/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Turmoil Tax | Login</title>
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
    <h1 style="color: black">Log in to your account</h1>
        <?php
    if(isset($_SESSION["msg"]))
        {
        $msg = $_SESSION["msg"];
        echo "
        <div class='alert alert-info alert-dismissable' style='width: 50%'>
            $msg
        </div>
        ";
        unset($_SESSION["msg"]);
        }
    ?>
    <form method="POST" action="php/login_user.php">
    <table class="table" style="width: 50%;">
        <tr>
            <td>
                Email:
            </td>
            <td>
                <input type = "email" name="email" class="form-control" placeholder="adam@gmail.com">
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <input type = "password" name="password" class="form-control" placeholder="adam@12345">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
            <button type="submit" name="login" class="btn btn-primary btn-lg" required="required">
            <i class="fa fa-sign-in"></i> Login</button>
            <hr/>
            <p>Forgot Your Password ?<p>                
            </td>
        </tr>
    </table>
    </form>    
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

        //Alert
        $(".alert").delay
        (2000).fadeOut(20000);
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
