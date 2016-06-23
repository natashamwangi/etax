<header id="header">
    <div class="top-bar">
    <div class="container">
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="top-number"><p><i class="fa fa-thumbs-up"></i> Keep In Touch </p></div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="social">
     <ul class="social-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
     </ul>     
       
    </div>
    </div>
    </div>
      </div>
        </div>
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
                        <!-- dropdown account  -->
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cogs fa-fw"></i> Applications <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> File Vault</a>
                            </li>
                            <li><a href="#"><i class="fa fa-flash fa-fw"></i> Tax Organizer</a>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar fa-fw"></i> Financial Calculator</a>
                            </li>                            
                        </ul>
                        <!-- /.dropdown-account -->
                        </li>
                        <li><a href="#"><i class="fa fa-medkit fa-fw"></i> Help</a></li>
                        <!-- dropdown account  -->
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php 
                        $cou = "SELECT * FROM `register` WHERE user_id = '$session_id';";
                        $varia = mysqli_query($Con, $cou); 
                        $raws = mysqli_fetch_assoc($varia); 
                        $first_name = $raws['first_name'];
                        $last_name = $raws['last_name'];
                        ?>
                        <i class="fa fa-user fa-fw"></i> <?php echo $first_name." ".$last_name ?> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> Profile</a>
                            </li>
                            <li><a href="logout.php"><i class="fa fa-lock fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-account -->
                        </li>
                        <!-- /.dropdown -->                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header>