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
        max-width: 40px;
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

                        <!--=======  product details slider area  =======-->
                        <div class="col-md-12 p-2">
                            <div class="cart_heading ">
                                <div style="padding: 10px 100px 10px 30px;">
                                    <p class="sitemaps m-0">Home > Cart > Delivery Methods</p>
                                    <h2 class="bold-font dark_color">Checkout</h2>
                                </div>
                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font dark_color pl-3">1. Shipping info</h4>
                                        <a href="<?= base_url('checkout') ?>" class="sinfo_edit_btn bold-font">Edit</a>
                                    </div>

                                    <div class="ship_userinfo row justify-content-between p-5">
                                        <?php
                                        $checkout = getRowById('checkout', 'id', sessionId('order_id'));
                                        ?>
                                        <div class=" col-md-6">
                                            <h5 class="address mb-1 bold-font dark_color">Address</h5>
                                            <span><?= wordwrap($checkout[0]['address'], 10, '<br>') ?></span><br>
                                            <span><?= $checkout[0]['city'] ?></span>,<br>
                                            <span><?= $checkout[0]['state'] ?></span>
                                        </div>
                                        <div class=" col-md-6">
                                            <h5 class="address mb-1 bold-font dark_color">Phone</h5>
                                            <span class="mb-1"><?= $checkout[0]['number'] ?></span>

                                            <h5 class="address mb-1 bold-font dark_color">Email</h5>
                                            <span><?= $checkout[0]['email'] ?></span>

                                        </div>
                                    </div>
                                </div>

                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font dark_color">2. Delivery Methods</h4>
                                        <!-- <a href="#" class="sinfo_edit_btn bold-font">Edit</a> -->
                                    </div>

                                    <div class="ship_userinfo row justify-content-between ">
                                        <div class="s-address_box row flex-column">
                                            <div class="delivery_shipment">
                                                <span>Shipment 1 of 1</span>
                                                <h4 class="address bold-font dark_color mb-0">Standard Shipping Only</h4>

                                            </div>
                                            <div class="row flex-column queen_lines">
                                                <!-- <h4 class="bold-font dark_color">Order Summary</h4> -->
                                                <?php
                                                foreach ($this->cart->contents() as $items) {
                                                    if ($items['is_visible'] == true) {
                                                        $var = explode('--', $items['variant']);
                                                ?>
                                                        <div class="standard_product_box">
                                                            <div class="str_image">
                                                                <img src="<?= setImage($items['image'], 'uploads/product/'); ?>" />
                                                            </div>
                                                            <div class="str_product_info">
                                                                <h4 class="cart_item_name bold-font dark_color"><?= $items['name']; ?></h4>
                                                                <span><?= (($var[1] != '') ? '   ' . $var[1] . ' Size' : ''); ?></span>
                                                                <?php
                                                                if ($items['discount_price'] != '') {
                                                                ?>
                                                                    <div class="str_pr_price"><strike>$ <?= $items['price'] ?></strike> &nbsp; <span class="bold-font dark_color">$ <?= $items['discount_price'] ?></span></div>

                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <span class="price">$ <?= $items['price'] ?></span>
                                                                <?php
                                                                }
                                                                ?>

                                                                <p>Qty: <?= $items['qty'] ?></p>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>

                                            </div>

                                            <div class="delivery_shipment p-3" style="border: solid #22305c 2px;">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h4 class="address bold-font dark_color mb-0">Standard Shipping </h4>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4 class="address bold-font dark_color mb-0">Free</h4>
                                                    </div>
                                                </div>

                                                <span>Estimated to leave the warehouse in 1-4 days</span>
                                            </div>
                                            <form action="" method="post">
                                                <div class="order_submit_btn">
                                                    <input type="hidden" value="<?= sessionId('order_id') ?>" name="order_id">
                                                    <input type="submit" value="Complete Order" class="megamenu_btn cart_ad checkoutbtn">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font  " style="font-weight: normal;color: #c7c5c5;">3. Payment info</h4>
                                        <!-- <a href="#" class="sinfo_edit_btn bold-font">Edit</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!--=======  End of product details description area  =======-->
                </div>
                <div class="col-lg-4">
                    <h4 class="bold-font dark_color">Order Summary</h4>
                    <?php
                    foreach ($this->cart->contents() as $items) {
                        if ($items['is_visible'] == true) {
                            $var = explode('--', $items['variant']);
                    ?>
                            <div class="standard_product_box">
                                <div class="str_image">
                                    <img src="<?= setImage($items['image'], 'uploads/product/'); ?>" />
                                </div>
                                <div class="str_product_info">
                                    <h4 class="cart_item_name bold-font dark_color"><?= $items['name']; ?></h4>
                                    <span><?= (($var[1] != '') ? '   ' . $var[1] . ' Size' : ''); ?></span>
                                    <?php
                                    if ($items['discount_price'] != '') {
                                    ?>
                                        <div class="str_pr_price"><strike>$ <?= $items['price'] ?></strike> &nbsp; <span class="bold-font dark_color">$ <?= $items['discount_price'] ?></span></div>

                                    <?php
                                    } else {
                                    ?>
                                        <span class="price">$ <?= $items['price'] ?></span>
                                    <?php
                                    }
                                    ?>

                                    <p>Qty: <?= $items['qty'] ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    </br>
                    <div class="afterpay_container">
                        <div class="price_el row justify-content-between">
                            <span>Price (<span class="cart_count"></span> items)</span>
                            <span>$ <span class="cart_total_count"></span></span>
                        </div>
                        <div class="price_el row justify-content-between">
                            <span>Product Discounts</span>
                            <span>$ <span class="product_discount"></span></span>
                        </div>
                        <div class="price_el row justify-content-between">
                            <span>Promo(s)</span>
                            <span>$0.00</span>
                        </div>
                        <div class="price_el row justify-content-between">
                            <span>Shipping</span>
                            <span>Free</span>
                        </div>
                        <div class="price_el row justify-content-between">
                            <span>Taxes (Inclusive)</span>
                            <span>$ <span class="product_tax"></span></span>
                        </div>
                        <div class="price_el row justify-content-between border-bottom border-top m-1">
                            <span>Promo Code</span>
                            <a href="">Add</a>
                        </div>
                        <div class="price_el row justify-content-between m-1">
                            <span>Order total</span>
                            <a href="" class="bold-font">$
                                <span class="cart_total_count"></span>
                            </a>
                        </div>
                        <!-- <div class="price_el row justify-content-between m-1">
              <a href="<?= base_url('checkout') ?>" class="megamenu_btn cart_ad checkoutbtn">Proceed to Checkout</a>
            </div> -->
                    </div>
                    </br>
                    <div class="afterpay_container">
                        <img scr="<?= base_url() ?>assets/images/cart_message.png">
                        <span class="text_content">
                            <h6 class="">Have Questions? Ask an Expert</h6>
                            <p>Talk to a real person. No robots. Our team of Sleep Experts is here 7 days a week to answer all your Purple questions.</p>
                        </span>
                    </div>
                </div>
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