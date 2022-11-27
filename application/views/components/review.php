 <div class="page-content-wrapper">
 	<!--=======  testimonial area  =======-->

 	<div class=" ">
 		<div class="container">
 			<div class="section-title-area text-center">
 				<h2 class="section-title bold-font my_heading">Share the love</h2>
 			</div>
 			<div class="row">
 				<div class="col-lg-12">
 					<!--=======  testimonial content wrapper  =======-->

 					<div class="testimonial-content-wrapper">

 						<div class="   align-items-center">
 							<!-- <div class="col-lg-6">
 								<div class="testimonial-image">
 									<img src="<?= base_url() ?>assets/images/testi_image.png" class="img-fluid" alt="" style="width:100%">
 									<a href="<?= base_url('all-reviews') ?>"><span class="review semi-bold dark_color">See all reviews</span></a>
 								</div>
 							</div> -->
 							<div class="">
 								<div class="testimonial-content p-1 m-1">
 									<!--=======  testimonial wrapper  =======-->
 									<div class="testimonial-wrapper review_st theme-slick-slider" data-slick-setting='{
                                            "slidesToShow": 3,
                                            "slidesToScroll": 3,
                                            "arrows": false,
                                            "dots": true,
                                            "autoplay": false,
                                            "autoplaySpeed": 5000,
                                            "speed": 500,
                                            "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
                                        }' data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 3, "arrows": false} },
                                            {"breakpoint":1199, "settings": {"slidesToShow": 3, "arrows": false} },
                                            {"breakpoint":991, "settings": {"slidesToShow": 3, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":767, "settings": {"slidesToShow": 2, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 2, "arrows": false, "slidesToScroll": 1} },
                                            {"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }
                                        ]'>
 										<?php
											$data = getAllRow('bc_product_review');
											foreach ($data as $rev) {
												review($rev);
											}
											?>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 					<!--=======  End of testimonial content wrapper  =======-->
 				</div>
 			</div>
 		</div>
 	</div>
 	<!--=======  End of testimonial area  =======-->
 </div>