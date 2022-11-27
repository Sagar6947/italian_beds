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
         <li class="breadcrumb-item  text-white  active" aria-current="page">Sign In</li>
     </ol>
 </nav>



 <section class="contactdiv3 gray-div" style="padding-top: 50px;">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 bg-light p-3 ">

                 <p class="para-text">Create an account with us and you&#x27;ll be able to:</p>
                 <ul class="pl-1">
                     <li class="">--> Check out faster</li>
                     <li class="">--> Save multiple shipping addresses</li>
                     <li class="">--> Access your order history</li>
                     <li class="">--> Track new orders</li>
                     <li class="">--> Save items to your Wish List</li>
                 </ul><br><br>
                 <a href="<?= base_url('register') ?>"><button class="btn btn-primary">Create Account</button></a>
             </div>
             <div class="col-lg-6">
                 <?php
                    if ($this->session->has_userdata('msg')) {
                        echo $this->session->userdata('msg');
                        $this->session->unset_userdata('msg');
                    }
                    ?>
                 <form action="" method="post">
                     <div class="mb-3">
                         <label class="form-label"></label>
                         <input type="email" placeholder="Email address" class="form-control" name="email">

                     </div>
                     <div class="mb-3">
                         <label class="form-label"></label>
                         <input type="password" class="form-control" placeholder="Password" name="password">

                     </div>


                     <button type="submit" class="btn btn-primary" style="margin: 18px 0;">Submit</button>
                     <div id="emailHelp" class="form-text">Forget Password</div>
                 </form>


             </div>
         </div>
     </div>
     </div>
 </section>




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