<!DOCTYPE html>

<html lang="zxx">

<!-- Mirrored from live.envalab.com/html/conset/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 07:22:13 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Service Details || Conset - Business Consulting HTML5 Template</title>

    <?php include("includes/styles.php"); ?>
    <style>
        .list_data {
            list-style: disc !important;


        }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>



        <!--/////////////////////// header start ////////////////////////-->

        <?php include("includes/header.php"); ?>
        <!--/////////////////////// header end ////////////////////////-->


      <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <section class="page-banner-about overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" style="color: white !important" data-wow-duration="1.5s">Service Details</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


        <!--==================================================================== 
            Start Service Details Section
        =====================================================================-->
        <section class="service-details pt-50 pb-50 rpt-90 rpb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-content" id="exe_search">
                            <!-- <div class="section-title">
                                <h2>Business <span>Consulting.</span></h2>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> -->
                            <div class="details-image">
                                <img src="<?php echo base_url(); ?>assets/home/images/services/service-details.jpg" alt="Service Details Image">
                            </div>
                            <h2><?php echo ucfirst($services_detail['name']);?></h2>
                            <p><?php echo ucfirst($services_detail['description']);?></p>


                        </div>
                       
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="sidebar-widget service-widget">
                                <h3>Our Services</h3>
                                <ul>
                                    <li><a id="exe_btn" href="javascript:void(0)">Executive Search</a></li>
                                    <li><a id="rec_btn" href="javascript:void(0)">Recruitment Solutions</a></li>
                                    <li><a id="hr_btn" href="javascript:void(0)">HR Advisory & Consulting</a></li>
                                    <li><a id="campus_btn" href="javascript:void(0)">Campus Hiring Solutions</a></li>
                                    <li><a id="staff_btn" href="javascript:void(0)">Contractual Staffing & Payroll</a></li>
                                    <li><a id="train_btn" href="javascript:void(0)">Training & Development</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget contact-widget text-center bg-snow">
                                <p>WE ARE READY.</p>
                                <h3>How Can We Help You?</h3>
                                <a href="contact.php" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Service Details Section
        =====================================================================-->


        <!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
        <section class="cta-section bg-snow pt-130 rpt-80 pb-135 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                            <h3>You Want To Work With Best Consulting<span> Solutions Company?</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <a href="contact.html" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Call To Action Section
        =====================================================================-->




        <!--/////////////////////// footer start ////////////////////////-->

        <?php include("includes/footer.php"); ?>
        <!--/////////////////////// footer end ////////////////////////-->


    </div>
    <!--End pagewrapper-->



    <?php include("includes/scripts.php"); ?>
    <script>
        $(document).ready(function() {
            $("#exe_search").hide();
            $("#rec_sol").hide();
            $("#hr_con").hide();
            $("#campus").hide();
            $("#staff").hide();
            $("#train").hide();
            var id = "<?php echo $id; ?>"
            $("#<?php echo $id; ?>").show();

            // alert(id);
            $("#exe_btn").click(function() {
                // alert("hi");
                $("#exe_search").show();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();

            });
            $("#rec_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").show();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#hr_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").show();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#campus_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").show();
                $("#staff").hide();
                $("#train").hide();
            });
            $("#staff_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").show();
                $("#train").hide();
            });
            $("#train_btn").click(function() {
                // alert("hi");
                $("#exe_search").hide();
                $("#rec_sol").hide();
                $("#hr_con").hide();
                $("#campus").hide();
                $("#staff").hide();
                $("#train").show();
            });
            // $("#show").click(function(){
            //     $("p").show();
            // });
        });
    </script>

</body>


</html>