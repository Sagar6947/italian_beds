 <div class="product-carousel-area section-space">
     <!--====================  product slider area ====================-->

     <div class="product-slider-area">
         <div class="container">

             <div class="row">
                 <div class="col-lg-12">
                     <!--=======  product slider wrapper  =======-->

                     <div class="product-slider-wrapper theme-slick-slider" data-slick-setting='{
                        "slidesToShow": 3,
                        "slidesToScroll": 3,
                        "arrows": true,
                        "dots": true,
                        "autoplay": false,
                        "speed": 500,
                        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },
                        "nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }
                    }' data-slick-responsive='[
                        {"breakpoint":1501, "settings": {"slidesToShow": 3, "slidesToScroll":3, "arrows": false} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 3, "slidesToScroll": 3, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 2,"slidesToScroll": 2, "arrows": true, "dots": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 2,"slidesToScroll": 2,  "arrows": true, "dots": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,"arrows": false, "dots": true} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": false} }
                    ]'>

                         <?php
                            // $data = getAllData('catalog/products');
                            // $product = json_decode($data, true);
                            // foreach ($product['data'] as $pro) {
                            //     product($pro);
                            // }
                            ?>
                         <?php

                            if ($product_slider != '') {
                                foreach ($product_slider as $pro) {
                                    product($pro);
                                }
                            }
                            ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>