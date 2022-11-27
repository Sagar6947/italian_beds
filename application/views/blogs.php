<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner">
    <img src="<?= base_url() ?>assets/images/collections/collection.png" alt="">
    <div class="banner_content">
        <h4 class="semi-bold">Our Blogs</h4>
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



<div class="page-content-wrapper">
    <!--=======  product carousel area  =======-->

    <!-- <div class="section-title-area text-center">
        <h2 class="section-title semi-bold my_heading">Shop our pillows</h2>
    </div> -->

    <div class="product-carousel-area section-space mt-5">
        <!--====================  product slider area ====================-->

        <div class="product-slider-area">
            <div class="container">

                <div class="row">
                     
                    <!--=======  product slider wrapper  =======-->
                    <?php
                    
                    if(!empty($myblog)){
                        foreach($myblog as $row){
                    ?>
                   
                    
                    <div class="col-md-4 mb-4">
                        <div class="single-grid-product">
                            <div class="single-grid-product__image">
                                <a href="<?= base_url('blog_details/' . $row['blog_id'] . '/' . url_title($row['title'], "dash", TRUE)) ?>" class="image-wrap">
                                    <img src="<?= setImage($row['image'], 'uploads/blogs/') ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="single-grid-product__content row p-3">
                                <h3 class="title dark_color col-md-7"><a href="<?= base_url('blog_details/' . $row['blog_id'] . '/' . url_title($row['title'], "dash", TRUE)) ?>" class="dark_color semi-bold" ><?= ucfirst($row['title']) ?></a></h3>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <!--=======  End of product carousel area  =======-->
</div>

<?php include 'includes/up_footer.php' ?>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>