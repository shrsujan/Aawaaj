<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<?php include_once(ROOT_PATH."app/view/loginmodal.php"); ?>
<?php include_once(ROOT_PATH."app/view/signupmodal.php"); ?>


 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container ">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand page-scroll" href="<?php echo BASE_URL.'public/index.php';?>">
                    <i class="fa fa-play-circle"></i> <span class="light">Aawaaj</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Trending Now</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Start Fundraiser</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>   
                    
                </ul>

            </div>
            <!-- Sign up / Login -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="" data-toggle="modal" data-target="#signupModal" id="signup_btn">Sign Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>

                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
