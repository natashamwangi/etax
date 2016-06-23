<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Turmoil Tax  | Order</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<body>
<?php include("includes/header.php"); ?>
<!-- Content -->
<section id = "bottom">
<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <h1 style="color: black">Place Order <i class="fa fa-shopping-cart"></i></h1>
    <table>
        <tr>
            <td>
                First Name:
            </td>
            <td>
                <input type="text" name="FirstName" id="FirstName" class="form-control" required="required" placeholder="Adams">
            </td>
            <td>
                Second Name:
            </td>
            <td>
                <input type="text" name="SecondName" id="SecondName" class="form-control" required="required" placeholder="Hill">
            </td>
            <td>
                Email:
            </td>
            <td>
                <input type="email" name="email" id="email" class="form-control" required="required" placeholder="adamsH@gmail.com">
            </td>
        </tr>
        <tr>
            <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
            <td>
                Category:
            </td>
            <td>
                <select name="Category" id="Category" class="form-control">
                    <optgroup label="Designers & Creative">
                        <option>Brochure</option>
                        <option>Logo</option>
                        <option>Advertisement</option>
                        <option>T-Shirt</option>
                    </optgroup>
                    <optgroup label="Web & Mobile">
                        <option>Website</option>
                        <option>Content Management System(CMS)</option>
                        <option selected="selected">Template to Website</option>
                        <option>Bootstrap Template</option>
                        <option>Search Engine Optimization(SEO)</option>
                        <option>Application Development</option>
                    </optgroup>
                </select>
            </td>
            <td>
                Budget:
            </td>
            <td>
                <select name="Budget" id="Budget" class="form-control">
                    <option>Kshs. 10,000  - 50,000</option>
                    <option selected="selected">Kshs. 50,000  - 100,000</option>
                    <option>Kshs. 100,000 - 300,000</option>
                    <option>Kshs. 30,000  - 600,000</option>
                    <option>Kshs. 600,000 - 1,000,000</option>
                    <option>Kshs. 1,000,000 +</option>
                </select>
            </td>
            <td>
                Job Title:
            </td>
            <td>
                <input type="text" name="Title" id="Title" class="form-control" required="required" placeholder="Custom Writing Pros">
            </td>
        </tr>
        <tr>
            <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
            <td style="vertical-align: top;">
                Description:
            </td>
            <td colspan="5">
                <textarea name="Description" id="Description" class="form-control" placeholder="Your Job Descroption.....">
                </textarea>
            </td>
        </tr>
        <tr>
            <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="6" style="text-align: right;">
                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                <i class="fa fa-check"></i>
                Submit Job</button>
            </td>
        </tr>
    </table>    
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
