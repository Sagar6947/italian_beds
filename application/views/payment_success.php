 <?php include 'includes/header-link.php' ?>
 <!--=======  header offer sticker  =======-->

 <?php include 'includes/header.php' ?>
 <!--====================  End of header area  ====================-->
 <!--====================  hero slider area ====================-->

 <!--<section class="home-banner about p-5" style="height:30vh"> -->

 <!--    <div class="banner_content">-->
 <!--        <h6 class="about-breadcrumbs semi-bold">User </h6>-->
 <!--        <h4 class="semi-bold"> Sign in</h4>-->
 <!--    </div>-->
 <!--<div class="about_image">-->
 <!--<img src="<?= base_url() ?>assets/images/Contact US.png" alt="" class="about-img">-->

 <!--</div>-->
 <!--</section>-->

 <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item text-white"><a href="<?= base_url() ?>">Italian Beds</a></li>
         <li class="breadcrumb-item  text-white  active" aria-current="page">Register</li>
     </ol>
 </nav>


    <!-- Begin page content -->
    <div class="container">
        <div class="row mt-3">
            <!-- <div class="col-sm-4"></div> -->
            <div class="col-4 mx-auto">
                <div class="card">
                    <img class="card-imgs-top" src="https://cdn.dribbble.com/users/411286/screenshots/2619563/desktop_copy.png" alt="Card image cap" width="349" height="250">
                    <div class="card-block" style="padding: 20px;">
                        <h4 class="card-title">Payment Successful #<?php echo sessionId('order_id'); ?></h4>
                        <p class="card-text">We received your payment on your purchase, check your email for more information.</p>
                        <a href="<?php echo site_url('/'); ?>" class="btn btn-info btn-sm float-right">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

 <div class="lastdiv">

     <section class="clients">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4">
                     <h2 class="clients_head bold-font dark_color">#DesignedForWellness</h2>
                     <p class="para_text">Speak to our expert sleep consultants and ensure all your sleep needs are met. Get their timely assistance by video, call or in-store.</p>

                     <ul>
                         <li>3/455 Scarborough Beach, Road Osborne Park, WA 6017</li>
                         <li>Monday - Friday: 9am - 6pm</li>
                         <li>Saturday Sunday: 10am - 7pm</li>
                     </ul>
                 </div>
                 <div class="col-lg-8">
                     <div class="row text-center ">
                         <div class="col-sm-4 text-center">
                             <img src="<?= base_url() ?>assets/images/contact-us.png" alt="">
                             <p class="margin-t dark_color">Contact Us</p>
                         </div>
                         <div class="col-sm-4 text-center">
                             <img src="<?= base_url() ?>assets/images/showroom.png" alt="">
                             <p class="margin-t dark_color">Showroom</p>
                         </div>
                         <div class="col-sm-4 text-center">
                             <img src="<?= base_url() ?>assets/images/matandpilow.png" alt="">
                             <p class="margin-t dark_color">Mattresses & Pillows</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 </div>




 <?php include 'includes/footer.php' ?>

 <?php include 'includes/footer-link.php' ?>