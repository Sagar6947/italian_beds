<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<!--<section class="home-banner" style="height:70vh">-->
<!--	<img src="<?= base_url() ?>assets/images/home-banner.png" alt="">-->
<!--	<div class="banner_content">-->
<!--		<h4 class="font-m">Spring for the best comfort<br> and sleep</h4>-->
<!--		<a href="<?= base_url('our-products') ?>" class="font-m">Shop now</a>-->
<!--	</div>-->
<!--</section>-->

<section class="home-banner" style="height:70vh">
    <a href="<?= base_url('our-products') ?>" class="banner_wrappers">
	<img src="<?= base_url() ?>assets/images/italianbeds_slide1.jpg" alt="" class="banner_before">
	<img src="<?= base_url() ?>assets/images/italianbeds-slide2.jpg" alt="" class="banner_after">
	
	
    </a>
	<!--<div class="banner_content">-->
	<!--	<h4 class="font-m">Spring for the best comfort<br> and sleep</h4>-->
	<!--	<a href="<?= base_url('our-products') ?>" class="font-m">Shop now</a>-->
	<!--</div>-->
</section>

<section class="buy_now">
	<div class="content">
		<h3 class="semi-bold">Buy Now Pay Later <img src="<?= base_url('assets/images/afterpay.png') ?>" class="afterpay_imgbuynow" style="width:130px;border-radius:30px;" /></h3>
		<a href="<?= base_url('our-products') ?>">More Details</a>
	</div>
</section>

<!-- <section class="features-area">
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

<!--====================  End of hero slider area  ====================-->
<!--====================  category grid  ====================-->

<div class="category-area section-space--small padding-top patp-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title-area text-center">
					<h2 class="section-title bold-font my_heading">The Best Trio</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<!--=======  ctaegory grid wrapper  =======-->

				<div class="category-grid-wrapper">
					<div class="row">
					    	<?php
						 
						if(!empty($category)){
    						foreach ($category as $cat) {
    							if ($cat['parent_id'] == 0){
    								category($cat, '4');
    						    }
    						}
						}
						?>
					</div>
				</div>

				<!--=======  End of ctaegory grid wrapper  =======-->
			</div>
		</div>
	</div>
</div>



<div class="page-content-wrapper">
	<!--=======  product carousel area  =======-->

	<div class="section-title-area text-center">
		<h2 class="section-title bold-font my_heading">Experience great sleep and holistic wellness</h2>
	</div>

	<?php $this->load->view('components/product_slider') ?>
	<!--=======  End of product carousel area  =======-->
</div>
<!--====================  End of featured brand  ====================-->
<!--====================  call to action area ====================-->

<div class="collection-container">
<?php $this->load->view('components/video') ?>
</div>

<!-- ============Testimonial============ -->
<?php $this->load->view('components/review') ?>

<div class="product-slider-text-area section-space bg_light_blue">
	<!--=======  product slider with text wrapper  =======-->

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="product-slider-text-wrapper">
					<div class="row">
						<div class="col-lg-5">
							<div class="product-slider-text-wrapper__text">
								<h2 class="title semi-bold dark_color">Shop our collection</h2>
								<p class="description">Choosing the right mattress is important for restful sleep. Althrough all of our mattresses are designed for yur ultimate comfort and wellness, selecting a specific one based on your lifestyle and nedds helps you get the wholesome relaxation you desire. Let us find the right italian Bed mattress for you.</p>
								<a href="<?= base_url('our-products') ?>" class="megamenu_btn">Shop now</a>
							</div>
						</div>
						<div class="col-lg-7">
							<!--=======  product slider wrapper  =======-->

							<div class="product-slider-wrapper theme-slick-slider" data-slick-setting='{
                                        "slidesToShow": 2,
                                        "slidesToScroll": 1,
                                        "arrows": true,
                                        "dots": false,
                                        "autoplay": false,
                                        "speed": 500,
                           
                                    }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 2, "slidesToScroll": 2, "arrows": false} },
                                        {"breakpoint":1199, "settings": {"slidesToShow": 2, "slidesToScroll": 1, "arrows": false} },
                                        {"breakpoint":991, "settings": {"slidesToShow": 2,"slidesToScroll": 2, "arrows": true, "dots": false} },
                                        {"breakpoint":767, "settings": {"slidesToShow": 2,"slidesToScroll": 2,  "arrows": true, "dots": false} },
                                        {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,"arrows": true, "dots": false} },
                                        {"breakpoint":479, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": false, "dots": false} }
                                    ]'>

								<div class="col">
									<!--=======  single short view product  =======-->
									<div class="single-grid-product">
										<div class="single-grid-product__image">
											<a href="" class="image-wrap">
												<img src="<?= base_url() ?>assets/images/store-slide1.png" class="img-fluid" alt="">
											</a>
										</div>
									</div>
									<!--=======  End of single short view product  =======-->
								</div>
								<div class="col">
									<!--=======  single short view product  =======-->
									<div class="single-grid-product">
										<div class="single-grid-product__image">
											<a href="" class="image-wrap">
												<img src="<?= base_url() ?>assets/images/store-slide-2.png" class="img-fluid" alt="">
											</a>
										</div>
									</div>
									<!--=======  End of single short view product  =======-->
								</div>

							</div>
							<!--=======  End of product slider wrapper  =======-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=======  End of product slider with text wrapper  =======-->
</div>


<section class="clients">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="clients_head semi-bold dark_color">100% Italian-made with traditional processing</h2>
			</div>
			<div class="col-lg-8">
				<div class="row text-center">
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-3.png" alt="">
					</div>
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-2.png" alt="">
					</div>
					<div class="col-sm-4">
						<img src="<?= base_url() ?>assets/images/partner-1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('components/video_section') ?>

 

<!--====================  footer ====================-->

<?php include 'includes/up_footer.php' ?>
<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>