<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->
<style>
    .fullimage {
        cursor: pointer;
    }

    .qty-container {
        display: flex;
        align-items: center;

    }

    .qty-container .input-qty {
        text-align: center;
        padding: 6px 10px;
        border: none;
        max-width: 70px;
    }

    .qty-container .qty-btn-minus,
    .qty-container .qty-btn-plus {
        border: 1px solid #d4d4d4;
        padding: 6px 0px;
        font-size: 10px;
        height: 27px;
        width: 27px;
        transition: 0.3s;
        background: transparent !important;
    }

    .qty-container .qty-btn-plus {
        margin-left: -1px;
    }

    .qty-container .qty-btn-minus {
        margin-right: -1px;
    }


    /*---------------------------*/
    .btn-cornered,
    .input-cornered {
        border-radius: 4px;
    }

    .btn-rounded {
        border-radius: 50%;
    }

    .input-rounded {
        border-radius: 50px;
    }
</style>
<?php include 'includes/header.php' ?>
<div class="page-content-wrapper padding-top-100">
    <!--=======  single product slider details area  =======-->

    <div class="single-product-slider-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        <!-- <p class="sitemaps">Home > Cart </p> -->

                        <!--=======  product details slider area  =======-->
                        <div class="col-md-12 p-2">
                            <div class="cart_heading ">
                                <h2 class="bold-font dark_color">Cart</h2>

                                <span class="total_num_items"><span class="cart_count"></span> items</span>
                                <div class="main_cart_wrapper" id="fullcartlist">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2 likealso">
                            <div class="cart_heading ">
                                <h2 class="bold-font dark_color mb-5">You Might Also Like:</h2>
                                <div class="main_cart_wrapper">
                                    <!--====Cart item starts====-->
                                    <?php
                                    if (!empty($like_product)) {
                                        foreach ($like_product as $pro) {
                                            if ($pro['is_visible'] == true) {
                                                $img = getRowByMoreId('bc_product_images', array('product_id' => $pro['id']));
                                                $product_variant = getRowById('bc_product_variants', 'product_id', $product[0]['id']);
                                                $price = $pro['price'];
                                                $discounted_price = $pro['discounted_price'];
                                                if ($product_variant != '') {
                                                    foreach ($product_variant as $variant_row) {
                                                        $option = json_decode($variant_row['option_values'], true);
                                                        $price = $variant_row['price'];
                                                        $discounted_price = $variant_row['sale_price'];
                                                        break;
                                                    }
                                                } else {
                                                }

                                    ?>

                                                <div class="cart_item_box">
                                                    <div class="cart_item_info">
                                                        <div class="cart_item_image">
                                                            <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="image-wrap">
                                                                <img src="<?= (($img != '') ? setImage($img[0]['image_file'], 'uploads/product/') : setImage('', 'uploads/product/')) ?>">
                                                            </a>
                                                        </div>
                                                        <div class="cart_item_detail">

                                                            <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="dark_color semi-bold">
                                                                <h3 class="cart_item_name bold-font dark_color"><?= $pro['name'] ?></h3>
                                                            </a>
                                                            <p class="width-90"><?= wordwrap($pro['sdesc'], 60, '<br>') ?></p>
                                                            <!-- <div class="m-2">
                                                                <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                            </div> -->

                                                        </div>
                                                    </div>
                                                    <div class="cart_item_price hm">
                                                        <div class="item_price">
                                                            <?php
                                                            if (!empty($discounted_price)) {
                                                            ?>
                                                                <strike class="cart_price_font">$ <?= $price ?></strike>
                                                            <?php
                                                            }
                                                            ?>

                                                            <span class="cart_price_font ml-1 bold-font dark_color">$ <?= (!empty($discounted_price)) ? $discounted_price : $price ?></span><br>
                                                            <a href="<?= base_url('product_details/' . $pro['id'] . '/' . url_title($pro['name'], "dash", TRUE)) ?>" class="megamenu_btn cart_ad ">Quick Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <!--====Cart item ends====-->

                                </div>
                            </div>
                        </div>


                    </div>

                    <!--=======  End of product details description area  =======-->
                </div>
                <?php $this->load->view('includes/checkout_card') ?>
            </div>
        </div>
    </div>




    <!--================== Featured section starts ======================-->



    <!--================== Featured section ends ======================-->











    <!-- ============Testimonial============ -->











    <?php include 'includes/up_footer.php' ?>



    <!--====================  footer ====================-->

    <?php include 'includes/footer.php' ?>

    <?php include 'includes/footer-link.php' ?>
    <script>
        var buttonPlus = $(".qty-btn-plus");
        var buttonMinus = $(".qty-btn-minus");

        var incrementPlus = buttonPlus.click(function() {
            var $n = $(this)
                .parent(".qty-container")
                .find(".input-qty");
            $n.val(Number($n.val()) + 1);
        });

        var incrementMinus = buttonMinus.click(function() {
            var $n = $(this)
                .parent(".qty-container")
                .find(".input-qty");
            var amount = Number($n.val());
            if (amount > 0) {
                $n.val(amount - 1);
            }
        });

        // When webpage will load, everytime below 
        // function will be executed
        $(document).ready(function() {

            // If user clicks on any thumbanil,
            // we will get it's image URL
            // $('.thumbnails img').on({
            //     click: function() {
            //         let thumbnailURL = $(this).attr('src');
            //         // Replace main image's src attribute value 
            //         // by clicked thumbanail's src attribute value
            //         $('.figure img').fadeOut(200, function() {
            //             $(this).attr('src', thumbnailURL);
            //         }).fadeIn(200);
            //     }
            // });
        });
        $('#variant').change(function() {
            var variant = $('#variant').val();
            console.log(variant);
            var result = variant.split('--');
            $('#variant_price').val(result[2]);
            $('#price').val(result[2]);
            $('#variant_id').val(result[0]);
            $('#variant_price_text').text(result[2]);
            $('#variant_old_price_text').html('<strike>$ ' + result[3] + '<strike>');
        });

        var variant = $('#variant').val();
        console.log(variant);
        if (variant != 'null') {
            var result = variant.split('--');
            $('#variant_price').val(result[2]);
            $('#price').val(result[2]);
            $('#variant_id').val(result[0]);
            $('#variant_price_text').text(result[2]);
            $('#variant_old_price_text').html('<strike>$ ' + result[3] + '<strike>');
        }

        var $tabIcons = $('.card-header button i.tabIcon');
        $('.card-header button').click(function() {
            //remove - from all icons, add +.
            $tabIcons.removeClass('fa-minus').addClass('fa-plus');
            //remove + from this tab icon, add -.
            $(this).find('i.tabIcon').removeClass('fa-plus').addClass('fa-minus');
        });
    </script>