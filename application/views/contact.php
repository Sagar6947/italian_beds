 <?php include 'includes/header-link.php' ?>
 <!--=======  header offer sticker  =======-->

 <?php include 'includes/header.php' ?>
 <!--====================  End of header area  ====================-->
 <!--====================  hero slider area ====================-->

 <section class="home-banner about">

     <div class="banner_content">
         <h6 class="about-breadcrumbs semi-bold">SUPPORT</h6>
         <h4 class="font-m">Contact Us</h4>
     </div>
     <div class="about_image">
         <img src="<?= base_url() ?>assets/images/Contact US.png" alt="" class="about-img">
     </div>
 </section>



 <section class="contactdiv3 light_blue_bg pb-50" style="padding-top: 200px; padding-bottom: 50px;">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">

                 <p class="para_text contact_para">We're here for all your sleep questions. Check out our FAQs or contact
                     our customer experience team for advice on your sleep concerns or
                     everything bedding
                 </p>

                 <ul class="contact_ul">
                     <li class="contact_para">
                         <h3 class="font-m">Email</h3> <a href="mailto:<?= $contactinfo['f_email'] ?>"><?= $contactinfo['f_email'] ?></a>
                         <?php if ($contactinfo['s_email'] != '') {
                            ?><br>
                             <a href="mailto:<?= $contactinfo['s_email'] ?>"><?= $contactinfo['s_email'] ?></a>
                         <?php
                            }
                            ?>
                     </li>
                     <li class="contact_para">
                         <h3 class="font-m">Phone no</h3>Call Us: <a href="tel:+61<?= $contactinfo['f_contact'] ?>">+61 <?= $contactinfo['f_contact'] ?></a>
                         <br>
                         Whatsapp: <a href="whatsapp://send?text=I am interested in Italian beds" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">+61 <?= $contactinfo['s_contact'] ?></a>
                     </li>
                     <li class="contact_para">
                         <h3 class="font-m">Address</h3>
                         <?= $contactinfo['address'] ?>
                     </li>
                 </ul>
             </div>
             <div class="col-lg-6">
                 <?php
                    if ($this->session->has_userdata('msg')) {
                        echo $this->session->userdata('msg');
                        $this->session->unset_userdata('msg');
                    }
                    ?>
                 <form action="" method="post">
                     <div class="row">
                         <div class="mb-3 col-md-12">
                             <input type="text" name="name" placeholder="Name" class="form-control contact_input">
                         </div>
                         <div class="mb-3 col-md-6">
                             <input type="email" name="email" class="form-control contact_input" placeholder="Email">
                         </div>
                         <div class="mb-3 col-md-6">
                             <input type="text" name="phone" placeholder="Phone" class="form-control contact_input">
                         </div>
                         <div class="mb-3 col-md-12">
                             <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                         </div>
                         <div class="mb-3 col-md-12">
                             <button type="submit" class="megamenu_btn mt-3">Submit</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>









 <?php include 'includes/up_footer.php' ?>
 <?php include 'includes/footer.php' ?>

 <?php include 'includes/footer-link.php' ?>