<?php 
include("../php/connect.php");
include("../php/session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Tax | Profile</title>
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
     <section id="contact-page">
     
        <br />
        <div class="container">
         <div class="well ">
            <div > 
             <?php 
                        $cou = "SELECT * FROM `register` WHERE user_id = '$session_id';";
                        $varia = mysqli_query($Con, $cou); 
                        $raws = mysqli_fetch_assoc($varia); 
                        $first_name = $raws['first_name'];
                        $last_name = $raws['last_name'];
                        $company_name = $raws['company_name'];
                        $email = $raws['email'];
                        $kra_pin=$raws['kra_pin'];
                        ?>      
                <h4 align="left"><?php echo $first_name." ".$last_name."'s" ?> Profile</h4>
             
            
           <?php
    if(isset($_SESSION["msg"]))
        {
        $msg = $_SESSION["msg"];
        echo "
        <div class='alert alert-danger alert-dismissable' style='width: 50%'>
            $msg
        </div>
        ";
        unset($_SESSION["msg"]);
        }
    ?>

    <form method="POST" action="profile_preview.php" id="myform">
        <div
     class="col-lg-3">
        <div class="well">
            <ul class="nav ">
                <li><a name="profilepreview" class= "btn btn-primary btn-sm"   href="#" onclick="document.getElementById('myform').submit()"> 
                Edit</a></li>
                <li ><a name="profiledelete" class= "btn btn-primary btn-sm" href="#" onclick="document.getElementById('myform').submit()" >
                Delete</a></li>
                <li><a name="profilechangepic" class= "btn btn-primary btn-sm" href="#" onclick="document.getElementById('myform').submit()" >
                Change Profile Picture</a></li>                                      
            </ul>
        </div>
    </div>
    <table class="table" style="width: 50%;">
        <tr>
            <td>
                <img src="images/avatar.png">
            </td>

            <td align="left">
               <p ><i class="fa fa-user text-success"></i> <strong>First Name:</strong> <?php echo $first_name?> </p>
               <p ><i class="fa fa-user text-success"></i>  <strong>Last Name:</strong> <?php echo $last_name?> </p>
               <p ><i class="fa fa-tags fa-fw text-info"></i>  <strong>Company Name:</strong> <?php echo  $company_name?> </p>
               <p ><i class="fa fa-envelope text-info"></i>  <strong>Email:</strong> <?php echo $email?> </p>
               <p ><i class="fa fa-unlock-alt text-danger"></i>  <strong>KRA PIN: </strong> 
                <?php   
                if (!empty($kra_pin )) 
                {
                  echo $kra_pin;
                    } 
                    else{       
                    echo "KRA PIN is not set";
                                }                         
                ?>
               </p>
            </td>

        </tr>

        
    </table>
</form>
</div> 

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
