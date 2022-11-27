<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<section class="home-banner">
    <img src="<?= base_url() ?>assets/images/pillow-banner.jpg" alt="Pillow">
    <div class="banner_content">
        <h4 class="semi-bold">Pillows</h4>
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

<div class="category-area section-space--small padding-top">
    <div class="container">
        <div class="row collection">
            <div class="col-lg-6">
                <div class="">

                    <h1 class="section-title text_black bold-font">PILLOWS</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class=" text-center">
                    <p class="text-justify collection_para font-r">Dreams get sweeter and sleep gets better with our super soft yet super
                        supportive pillows. They are made exactly the way your head and neck
                        desire to feel.</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">

                <!--=======  ctaegory grid wrapper  =======-->

                <div class="category-grid-wrapper">
                    <div class="row">
                        <?php

                        if ($product != '') {
                            foreach ($product as $pro) {
                                $pro_cate = json_decode($pro['categories'], true);
                                if (in_array(25, $pro_cate)) {
                                    product_list($pro, '4');
                                }
                            }
                        } else {
                            echo 'asdfasd';
                        }
                        ?>
                        <!--=======  End of single-category  =======-->
                    </div>
                </div>
                <!--=======  End of ctaegory grid wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<div class="category-area section-space--small padding-top gray_bg section_padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 order-1">
                <!--=======  blog post wrapper  =======-->

                <div class="blog-post-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <!--=======  single post  =======-->

                            <div class="single-blog-post">
                                <div class="single-blog-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="<?= base_url() ?>assets/images/images/pillow_sleep_girll.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="single-blog-post__content">
                                    <h3 class="post-title"><a href="" class="bold-font dark_color">Feels like a cloud</a></h3>
                                    <p class="post-excerpt">Takes the shape of your neck, aligns the spine, and provides the
                                        ideal surface for your skin</p>

                                </div>
                            </div>

                            <!--=======  End of single post  =======-->
                        </div>
                        <div class="col-md-6">
                            <!--=======  single post  =======-->

                            <div class="single-blog-post">
                                <div class="single-blog-post__image">
                                    <a href="blog-post-left-sidebar.html">
                                        <img src="<?= base_url() ?>assets/images/images/pillow_sleep_girl2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="single-blog-post__content">
                                    <h3 class="post-title"><a href="" class="bold-font dark_color">Supports like a friend</a></h3>
                                    <p class="post-excerpt">Provides extreme comfort and consistent support levels across the length of the entire pillow</p>
                                </div>
                            </div>

                            <!--=======  End of single post  =======-->
                        </div>


                    </div>
                </div>


                <!--=======  End of pagination wrapper  =======-->
            </div>
        </div>
    </div>
</div>


<?= include 'components/cta.php' ?>




<div class="cta-area cta-bg cta-bg--one collection-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <!--=======  cta content wrapper  =======-->

                <div class="cta-content-wrapper">
                    <div class="cta-content">
                        <h3 class="title">Find out which mattress is best</br> for you!</h3>
                        <p class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        <a href="<?= base_url('our-products') ?>" class="theme-button cta-btn semi-bold">Compare Now</a>
                    </div>
                </div>

                <!--=======  End of cta content wrapper  =======-->
            </div>
        </div>
    </div>
</div>


<section class="buy_now collection-container">
    <div class="content">
        <h3 class="semi-bold">Buy Now Pay Later <img src="<?= base_url('assets/images/afterpay.png') ?>" style="width:130px;border-radius:30px;" /></h3>
        <a href="<?= base_url('our-products') ?>">More Details</a>
    </div>
</section>


<!-- ============Testimonial============ -->
<?php $this->load->view('components/review') ?>



<?php $this->load->view('components/video_section') ?>

<div class="page-content-wrapper">
    <!--=======  product carousel area  =======-->

    <div class="section-title-area text-center">
        <h2 class="section-title bold-font my_heading">Shop our pillows</h2>
    </div>

    <?php $this->load->view('components/product_slider') ?>
    <!--=======  End of product carousel area  =======-->
</div>


<?php $this->load->view('components/faq') ?>

<?php include 'includes/up_footer.php' ?>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>