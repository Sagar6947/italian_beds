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



 <section class="contactdiv3 gray-div pb-5" style="padding-top: 50px;">
     <div class="container">
         <div class="row d-flex justify-content-center  ">

             <div class="col-lg-8">
                 <?php
                    if ($this->session->has_userdata('msg')) {
                        echo $this->session->userdata('msg');
                        $this->session->unset_userdata('msg');
                    }
                    ?>
                 <form action="" method="post">
                     <div class="row">
                         <div class="col-md-6 mb-3">
                             <label class="form-label">First name</label>
                             <input type="text" placeholder="First Name" class="form-control" name="first_name" required>

                         </div>
                         <div class="col-md-6 mb-3">
                             <label class="form-label">Last name</label>
                             <input type="text" placeholder="Last Name" class="form-control" name="last_name" required>

                         </div>
                         <div class="col-md-6 mb-3">
                             <label class="form-label">Company name</label>
                             <input type="text" class="form-control" placeholder="Company name" name="company">

                         </div>
                         <div class="col-md-6 mb-3">
                             <label class="form-label">Email</label>
                             <input type="email" placeholder="Email address" class="form-control" name="email" required>

                         </div>
                         <div class="col-md-6 mb-3">
                             <label class="form-label">Password</label>
                             <input type="password" class="form-control" placeholder="Password" name="password" required pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]){7,}">
                             <span style="font-size: 12px">Password should contain - Min 7 digit, (a-z), (A-Z) , and (0-9) </span>
                         </div>
                         <div class="col-md-6 mb-3">
                             <label class="form-label">Contact no.</label>
                             <input type="number" placeholder="Phone no." class="form-control" name="phone" required>

                         </div>

                     </div>


                     <button type="submit" class="btn btn-primary">Create account</button>
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