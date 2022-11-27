<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner about faq">

    <div class="banner_content" style="top: 15% !important;">
        <h6 class="about-breadcrumbs semi-bold"></h6>
        <h4 class="semi-bold">FAQ's</h4>
    </div>
    <div class="about_image faq_about_image">
        <img src="<?= base_url() ?>assets/images/faq-new.png" alt="" class="faq-img">
    </div>
</section>



<?php $this->load->view('components/st_faq') ?>




<!--====================  footer ====================-->
<?php include 'includes/up_footer.php' ?>
<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>