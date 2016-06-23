<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Turmoil Tax | Services </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
    <!-- Header -->
    <?php
    include("includes/header.php"); ?>
    <!-- /Header -->
    <section id="feature">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Turmoil Tax  Professional Suite 
</h2>
                <p class="lead">Explore our products and services</p>
            </div>

            <div class="row">
                <div class="features">

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Accounting & Auditing</h2>
                            <h3>Accounting section combines write-up, trial balance, payroll, financial reporting and client accounting into one flexible, customizable and totally revolutionary platform. It enables you to collaborate securely with clients in real time using Accounting Client Access giving you instant access to reports that help them make more informed decisions.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Engagement suite</h2>
                            <h3>Engagement suite is a powerful, all-inclusive engagement solution that offers a completely paperless workflow, robust collaboration tools and full compliance at every step of the engagement .</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>AdvanceFlow</h2>
                            <h3>AdvanceFlow is the first audit management application that combines the convenience of the cloud with enterprise-level processing power. Real-time engagements, workpapers are available with just a click, even for the most complex clients. In addition, AdvanceFlow  provides powerful methodology, guidance and documentation resources.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section>
    <!--/#feature-->
    <div class="clients-area center wow fadeInDown">
        <h2>
            What our client says</h2>
        <p class="lead">
            We pride ourselves on providing superior service but you don't just have to take
            our word for it.
            <br>
            Read what employers in Kenya have to say about working with Turmoil Tax  in the
            client testimonials below.</p>
    </div>
    <div class="container">
        <div class="col-md-4 wow fadeInDown">
            <div class="clients-comments text-center">
                <img src="images/client1.png" class="img-circle" alt="">
                <h3>
                    Marketers, including Unilever, reveal </h3>
                <h4>
                    <span>- Will Smith /</span> Director of turmoiltax.com</h4>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="clients-comments text-center">
                <img src="images/client2.png" class="img-circle" alt="">
                <h3>
                    Executives from BBH, Euro RSCG.</h3>
                <h4>
                    <span>- Will Smith /</span> Director of turmoiltax.com</h4>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="clients-comments text-center">
                <img src="images/client3.png" class="img-circle" alt="">
                <h3>
                    Professors from the Kellogg.</h3>
                <h4>
                    <span>- Will Smith /</span> Director of turmoiltax.com</h4>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- /Footer -->
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
