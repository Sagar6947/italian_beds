<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================--> 
<!--====================  hero slider area ====================-->

<section class="home-banner" style="height:60vh">
	<img src="<?= base_url() ?>assets/images/home-banner.png" alt="">
	<div class="banner_content">
		<h4>Our reviews</h4>
		 
	</div>
</section>
<!-- 
<section class="features-area">
	<div class="features_box">
		<div class="box">
			<img src="<?= base_url() ?>assets/images/shield.png" alt="">
			<p>10-Year Warranty</p>
		</div>
		<div class="box">
			<img src="<?= base_url() ?>assets/images/shipping.png" alt="">
			<p>Free Shipping</p>
		</div>
	</div>
</section> -->
<?php $this->load->view('components/review') ?>
 
<?php include 'includes/up_footer.php' ?>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>