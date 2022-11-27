<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner">
    <?php
    if ($collection_title == 'Bed Frames') {
    ?>
        <img src="<?= base_url() ?>assets/images/bedframes-banner.jpg" alt="bed frame">
    <?php
    } else if ($collection_title == 'Pillow') {
    ?>
        <img src="<?= base_url() ?>assets/images/pillow-banner.jpg" alt="bed frame">
    <?php
    } else {
    ?>
        <img src="<?= base_url() ?>assets/images/collections/collection.png" alt="">
    <?php
    }
    ?>
    <div class="banner_content">
        <h4 class="semi-bold  text-capitalize <?= ($collection_title == "Bed Frames") ? "dark_color mt_banner" : "" ?>"> <?= $collection_title ?></h4>
    </div>
</section>
<section class="buy_now">
	<div class="content">
		<h3 class="semi-bold">Buy Now Pay Later <img src="<?= base_url('assets/images/afterpay.png') ?>" style="width:130px;border-radius:30px;" /></h3>
		<a href="<?= base_url('our-products') ?>">More Details</a>
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


<!--====================  End of hero slider area  ====================-->
<!--====================  category grid  ====================-->

<div class="category-area section-space--small padding-top">
    <div class="container">
        <div class="row collection">
            <div class="col-lg-6">
                <div class="">
                    <p class="semi-bold text_black">

                        <?php
                        $count = 0;
                        if ($cat_children != '') {
                            foreach ($cat_children as $child) {
                                $count++;
                            }
                        }
                        if ($count > 0) {
                        ?>
                            <?= $count ?> Collection
                        <?php
                        } else {
                            $prodcount = 0;
                            if ($product != '') {
                                foreach ($product as $pro) {
                                    $got =  in_array($cat_id, json_decode($pro['categories'], true));
                                    if (in_array($cat_id, json_decode($pro['categories'], true))) {
                                        $prodcount++;
                                    } else {
                                    }
                                }
                            }
                            echo $prodcount;
                        ?> Products
                        <?php
                        }
                        ?>
                    </p>
                    <h1 class="section-title text_black bold-font text-capitalize"><?= (($subcat_title != '') ? str_replace('-', ' ', $subcat_title) : str_replace('-', ' ', $collection_title)) ?>  </h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class=" text-justify">
                    <p class="text-justify collection_para font-r"><?= $collection_desc ?> </p>
                </div>
            </div>
        </div>
        <?php
        if ($count > 0) {
        ?>

            <div class="row">
                <div class="col-lg-12">

                    <!--=======  ctaegory grid wrapper  =======-->

                    <div class="category-grid-wrapper">
                        <div class="row">
                            <?php
                            foreach ($cat_children as $subcat) {
                                $single_category = getSingleRowById('category', array('id' => $subcat['id']));
                            ?>
                                <div class="col-md-4">
                                    <!--=======  single-category  =======--->

                                    <div class="single-grid-product collections">
                                        <div class="single-grid-product__image">

                                            <a href="<?= base_url('collection/' . $single_category['id'] . '/' . url_title($collection_title, "dash", TRUE) . '/' . url_title($single_category['name'], "dash", TRUE)) ?>" class="image-wrap">
                                                <img src="<?= setImage($single_category['image_url'], 'uploads/subcategory/') ?>" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="single-grid-product__content">
                                            <h3 class="title dark_color"><a href="<?= base_url('collection/' . $single_category['id'] . '/' . url_title($collection_title, "dash", TRUE) . '/' . url_title($single_category['name'], "dash", TRUE)) ?>" class="dark_color bold-font mar-right font-s22"><?= $single_category['name'] ?> </a> <i class="fa fa-arrow-right"></i> </h3>

                                            <p><?= $single_category['description'] ?> </p>
                                        </div>
                                    </div>
                                </div>

                            <?php

                            }
                            ?>
                            <!--=======  End of single-category  =======-->


                        </div>
                    </div>

                    <!--=======  End of ctaegory grid wrapper  =======-->
                </div>
            </div>
        <?php
        } else {
        ?>

            <div class="row">
                <?php
                if ($product != '') {
                    foreach ($product as $pro) {
                        $got =  in_array($cat_id, json_decode($pro['categories'], true));

                        if (in_array($cat_id, json_decode($pro['categories'], true))) {

                            product_list($pro, '4');
                        } else {
                        }
                    }
                }
                ?>
            </div>
        <?php
        }
        ?>


    </div>
</div>



<?php
        if(!empty($st_cat['title_one'] && $st_cat['image_url_one']) || !empty($st_cat['title_two'] && $st_cat['image_url_two'])){
        ?>
        
<div class="category-area section-space--small padding-top gray_bg section_padding">
    <div class="container">
        
        <?php
                if(!empty($st_cat['title_one'] && $st_cat['image_url_one'])){
                ?>
        
        
        <div class="row">
            <div class="col-lg-12">

                <!--=======  ctaegory grid wrapper  =======-->

                <div class="category-grid-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <!--=======  single-category  =======-->
                            <div class="image_box">
                               

                                
                                    <img src="<?= base_url() ?>uploads/category/<?= $st_cat['image_url_one'] ?>" width="100%" alt="">
                                
                            </div>


                            <!--=======  End of single-category  =======-->
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <!--=======  single-category  =======-->
                            
                                <div class="collection-content ">
                                    <h2 class="bold-font"><?= $st_cat['title_one'] ?>
                                    </h2>

                                    <p class="font-r"><?= $st_cat['description_one'] ?> </p>
                                </div>
                          

                            <!--=======  End of single-category  =======-->
                        </div>
                    </div>
                </div>

                <!--=======  End of ctaegory grid wrapper  =======-->
            </div>
        </div>
        <?php
                }
        ?>
         <?php
            if(!empty($st_cat['title_two'] && $st_cat['image_url_two'])){
            ?>

        <div class="row mt-50 margin-t">
            <div class="col-lg-12">

                <!--=======  ctaegory grid wrapper  =======-->

                <div class="category-grid-wrapper">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <!--=======  single-category  =======-->


                            
                                <div class="collection-content ">
                                    <h2 class="bold-font"><?= $st_cat['title_two'] ?>
                                    </h2>

                                    <p class="font-r"><?= $st_cat['description_two'] ?></p>
                                </div>
                            

                            <!--=======  End of single-category  =======-->
                        </div>

                        <div class="col-md-6">
                            <!--=======  single-category  =======-->

                            <div class="image_box">
                                
                                    <img src="<?= base_url() ?>uploads/category/<?= $st_cat['image_url_two'] ?>" width="100%" alt="bed-frames">
                               
                            </div>


                            <!--=======  End of single-category  =======-->
                        </div>

                    </div>
                </div>

                <!--=======  End of ctaegory grid wrapper  =======-->
            </div>
        </div>
        <?php
            }
            ?>
    </div>
</div>


<?php

}

?>



<?= include 'components/cta.php' ?>




<div class="collection-container">
   <?php $this->load->view('components/video') ?>
</div>





<!-- ============Testimonial============ -->
<?php $this->load->view('components/review') ?>



<?php $this->load->view('components/video_section') ?>

<div class="page-content-wrapper">
    <!--=======  product carousel area  =======-->

    <div class="section-title-area text-center">
        <h2 class="section-title semi-bold my_heading">Shop related products</h2>
    </div>

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
                        {"breakpoint":1501, "settings": {"slidesToShow": 3, "slidesToScroll": 3, "arrows": false} },
                        {"breakpoint":1199, "settings": {"slidesToShow": 3, "slidesToScroll": 3, "arrows": false} },
                        {"breakpoint":991, "settings": {"slidesToShow": 2,"slidesToScroll": 2, "arrows": true, "dots": false} },
                        {"breakpoint":767, "settings": {"slidesToShow": 2,"slidesToScroll": 2,  "arrows": true, "dots": false} },
                        {"breakpoint":575, "settings": {"slidesToShow": 2, "slidesToScroll": 2,"arrows": false, "dots": true} },
                        {"breakpoint":479, "settings": {"slidesToShow": 1,"slidesToScroll": 1, "arrows": true, "dots": false} }
                    ]'>
                            <?php
                            if ($product_slider != '') {
                                foreach ($product_slider as $pro) {
                                    $cat_arr = json_decode($pro['categories'], true);

                                    if (in_array($cat_id, $cat_arr)) {
                                    } else {
                                        if ($cat_id == 32) {
                                            if (in_array(31, $cat_arr)) {
                                                product($pro);
                                            }
                                        } else {
                                            product($pro);
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of product carousel area  =======-->
</div>

<?php $this->load->view('components/faq') ?>

<?php include 'includes/up_footer.php' ?>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>