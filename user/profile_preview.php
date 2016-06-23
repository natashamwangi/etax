<?php
include("../php/connect.php");
include("../php/session.php");

if (isset($_POST['profilepreview'])){

    $first_name     = $_POST['first_name'];
    $last_name      = $_POST['last_name'];
    $company_name   = $_POST['company_name'];
    $email          = $_POST['email'];
    $pass           = $_POST['password'];
    $kra_pin        = $_POST['kra_pin'];

}
if (isset($_POST['save'])) {
    $kra_pin        = $_POST['kra_pin'];

    mysqli_autocommit($Con,false);   
       
   $sql = ("UPDATE `register` SET `register`.kra_pin = ' $kra_pin'
              WHERE `register`.user_id = '$session_id'" );

    $query=mysqli_query($Con,$sql) or mysql_error();

      if ($query) {

        mysqli_query($Con,"COMMIT");

      $_SESSION['msg']= "Your Account Details have been saved";
      header("location:profile.php"); 

      } else {        
          mysqli_query($Con,"ROLLBACK");
              
      $_SESSION['msg']="An error occured during processing please try again";
      header("location:profile.php");
      }

      mysqli_close($Con);

}

if (isset($_POST['back'])) {
    header("location:profile.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Tax | Update</title>
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
        <div class="container">
        <br />
            <div class="center">  
             <?php 
                        $cou = "SELECT * FROM `register` WHERE user_id = '$session_id';";
                        $varia = mysqli_query($Con, $cou); 
                        $raws = mysqli_fetch_assoc($varia); 
                        $first_name = $raws['first_name'];
                        $last_name = $raws['last_name'];
                        $company_name = $raws['company_name'];
                        $email = $raws['email'];
                        $kra_pin= $raws['kra_pin'];
                        ?>      
                <h4 align="left"><?php echo $first_name." ".$last_name."'s" ?> Profile</h4>
             
            </div> 
            <form method="POST" action="">
        <table class="table" style="width: 50%;">
        <tr>
            <td>
                First Name:
            </td>
            <td>
                <input type = "text" name="first_name" class="form-control" value="<?php echo $first_name?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>
                Last Name:
            </td>
            <td>
                <input type = "text" name="last_name" class="form-control" value="<?php echo $last_name?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>
                Company Name:
            </td>
            <td>
                <input type = "text" name="company_name" class="form-control" value="<?php echo  $company_name?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <input type = "email" name="email" class="form-control" value="<?php echo $email?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>
                KRA PIN:
            </td>
            <td>
                <input type = "text" name="kra_pin" class="form-control" value="<?php echo $kra_pin?>"  >
            </td>
        </tr>
     
        <tr>
            
        <td>
            <button type="submit" name="back" class="btn btn-primary btn-lg" required="required">
            <i class="fa fa-arrow-left fa-fw"></i> Back</button>
          
             </td>
              <td style="text-align: right;">
            <button type="submit" name="save" class="btn btn-primary btn-lg" required="required">
            <i class="fa fa-sign-in"></i> Save</button>
        
        </tr>
    </table>
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
