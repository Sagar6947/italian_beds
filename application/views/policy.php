<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner about">

    <div class="banner_content">
        <h6 class="about-breadcrumbs semi-bold">Italian Beds</h6>
        <h4 class="semi-bold">Privacy Policy</h4>
    </div>
    <div class="about_image">
        <img src="<?= base_url() ?>assets/images/about/about.png" alt="" class="about-img">
    </div>
</section>




<div class="testimonial-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-5 mt-5 mb-5">


                <div class="single-testimonial ">


                    <div class="single-testimonial__content">

                        <?php
                        echo $policy['policy'];
                        ?>

                    </div>
                </div>




                <!--=======  End of testimonial wrapper  =======-->
            </div>
        </div>
    </div>





    <!--====================  footer ====================-->
    <?php include 'includes/up_footer.php' ?>
    <?php include 'includes/footer.php' ?>

    <?php include 'includes/footer-link.php' ?>