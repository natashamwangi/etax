<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Turmoil Tax  | Contact Us</title>
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
    <!-- Header -->
    <?php include("includes/header.php"); ?>
    <!-- /Header -->
    <section id="contact-info">
     <br /> <br />  
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">Get In Touch.</p>
     
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:200px;width:500px;'><div id='gmap_canvas' style='height:200px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">                                   embed google map                            </a></small></div><div><small><a href="http://freedirectorysubmissionsites.com">directory submission sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(-1.287904166628309,36.82480007039181),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-1.287904166628309,36.82480007039181)});infowindow = new google.maps.InfoWindow({content:'<strong>One Technologies</strong><br>Nairobi, kenya<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                <i class="fa fa-desktop"></i>
                                    Website:www.turmoiltax.com</p>
                                </address>

                                <address>
                                <i class="fa fa-envelope"></i>
                                    Email Address:info@turmoiltax.com</p>
                                </address>

                                <address>
                                <i class="fa fa-envelope-o"></i>
                                    Email Address:info@turmoiltax.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/gmap_area -->
    <section id="contact-page">
        <div class="container">
        <br />
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">We will get back you soon. Keep In Touch. </p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                               <input type="text" name="Name" id="Name" class="form-control" required="required" placeholder="Adams">
                             </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control" required="required" placeholder="adams@gmail.com">                          
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                               <input type="text" name="Subject" id="Subject" class="form-control" required="required" placeholder="Inquiry">
                            
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message Here.."></textarea>                           
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                            <i class="fa fa-paper-plane-o"></i>
                            Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- /Footer -->
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
