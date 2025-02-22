     <!--==================================================================== 
                                Start Header area
        =====================================================================-->
        <header class="main-header">

            <div class="header-top bg-orange">
                <div class="container">
                    <div class="top-inner">
                        <ul class="top-left">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@hrfirst.in">info@hrfirst.in</a></li>
                            <li><i class="fas fa-map-marker-alt"></i>#503 7-1-58, Ameerpet, Greenlands, Hyderabad-500016</li>
                        </ul>

                        <div class="top-right ml-auto">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a href="#"><i class="fab fa-skype"></i></a> -->
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner d-lg-flex align-items-center">

                        <div class="logo-outer d-flex align-items-center">
                            <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>assets/home/images/logo.png" height="70px" width="140px" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header clearfix">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'index.php') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'about.php') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo base_url(); ?>about">About</a></li>
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'service-details.php') ? "class='current-menu-item'" : ""; ?> ><a href="service-details.php?id=exe_search">Services</a></li>
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'careers.php') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo base_url(); ?>careers">Careers</a></li>
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'blog.php') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo base_url(); ?>blogs">Blog</a></li>
                                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="case-details.php">Case Details</a></li>
                                                <li><a href="404.php">404</a></li>
                                            </ul>
                                        </li> -->
                                        <li <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'contact.php') ? "class='current-menu-item'" : ""; ?> ><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <div class="menu-number">
                            <i class="flaticon-headphone"></i> <a href="callto:+91 99499 96126">+91 9949996126</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!--==================================================================== 
                                End Header area
        =====================================================================-->
