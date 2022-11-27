<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->
<style>
    .fullimage {
        cursor: pointer;
    }

    .quantity {
        position: relative;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .quantity input {
        width: 45px;
        height: 42px;
        line-height: 1.65;
        float: left;
        display: block;
        padding: 0;
        margin: 0;
        padding-left: 10px;
        border: 1px solid #eee;
    }

    .quantity input:focus {
        outline: 0;
    }

    .quantity-nav {
        float: left;
        position: relative;
        height: 42px;
    }

    .quantity-button {
        position: relative;
        cursor: pointer;
        border-left: 1px solid #eee;
        width: 20px;
        text-align: center;
        color: #333;
        font-size: 13px;
        font-family: "Trebuchet MS", Helvetica, sans-serif !important;
        line-height: 1.7;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    .quantity-button.quantity-up {
        position: absolute;
        height: 50%;
        top: 0;
        border-bottom: 1px solid #eee;
    }

    .quantity-button.quantity-down {
        position: absolute;
        bottom: -1px;
        height: 50%;
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

                        <p class="sitemaps">Mattress > Celebrity > <?= $product[0]['name'] ?></p>
                        <!--=======  product details slider area  =======-->

                        <?php
                        $i = 0;
                        if ($img != '') {
                            foreach ($img as $single_img) {

                        ?>
                                <div class="col-md-<?= (($i == 0) ? '12' : '6 product_view_mobile') ?> p-2">
                                    <img loading="lazy" src="<?= setImage($single_img['image_file'], 'uploads/product/') ?>" data-url="<?= setImage($single_img['image_file'], 'uploads/product/') ?>" class="shadow img-responsive" style="width:100%" data-toggle="modal" data-target="#exampleModalCenter<?= $i ?>">
                                    <div class="modal fade" id="exampleModalCenter<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter<?= $i ?>Title" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img loading="lazy" src="<?= setImage($single_img['image_file'], 'uploads/product/') ?>" class="img-responsive w-100">
                                                </div>
                                                <!--<div class="modal-footer">-->
                                                <!--    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->

                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </div>




                    <div class="row">
                        <div class="col-md-12 p-3 ml-3">
                            <p>Photo is for illustration purpose only</p>
                        </div>

                    </div>


                    <!--=======  End of product details slider area  =======-->
                </div>
                <div class="col-lg-4">
                    <!--=======  product details description area  =======-->

                    <div class="product-details-description-wrapper col-md-12">
                        <h1 class="item-title bold-font dark_color"><?= $product[0]['name'] ?></h1>
                        <?php
                        $product_review = getRowById('bc_product_review', 'product_id', $product[0]['id']);

                        $total_review = 1;
                        $count_review = 1;
                        if ($product_review != '') {
                            foreach ($product_review as $rev) {
                                $total_review += $rev['rating'];
                                $count_review++;
                            }
                        }
                        $average_review = $total_review / $count_review;
                        ?>
                        <div class="stars">

                            <div class="rating">
                                <?php
                                if ($product_review != '') {
                                ?>
                                    <i class="fa fa-star <?= (($average_review == 1) ? 'active' : '') ?>"></i>
                                    <i class="fa fa-star <?= ((($average_review <= 1) && ($average_review <= 2)) ? 'active' : '') ?>"></i>
                                    <i class="fa fa-star <?= ((($average_review <= 1) && ($average_review <= 3)) ? 'active' : '') ?>"></i>
                                    <i class="fa fa-star <?= ((($average_review <= 1) && ($average_review <= 4)) ? 'active' : '') ?>"></i>
                                    <i class="fa fa-star <?= ((($average_review <= 1) && ($average_review <= 5)) ? 'active' : '') ?>"></i>
                                    <span>(<?= number_format($count_review) ?>)</span>
                                <?php
                                } else {
                                    echo 'No review Yet';
                                }
                                ?>
                            </div>

                            <div class="read_btn">
                                <p class="dark_color text-uppercase"><a href="#" data-toggle="modal" data-target="#exampleModalLong"><u>Read Reviews</u> </a> </p>
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">All reviews</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                if ($product_review != '') {
                                                    foreach ($product_review as $rev) {
                                                ?>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img loading="lazy" src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
                                                                <!-- <p class="text-secondary text-center">15 Minutes Ago</p> -->
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p>
                                                                    <a class="float-left" href="#"><strong><?= $rev['name'] ?> </strong></a>
                                                                    <span class="float-right"><i class="text-<?= (($average_review == 1) ? 'warning' : 'secondary') ?> fa fa-star"></i></span>
                                                                    <span class="float-right"><i class="text-<?= ((($average_review <= 1) && ($average_review <= 2)) ? 'warning' : 'secondary') ?> fa fa-star"></i></span>
                                                                    <span class="float-right"><i class="text-<?= ((($average_review <= 1) && ($average_review <= 3)) ? 'warning' : 'secondary') ?> fa fa-star"></i></span>
                                                                    <span class="float-right"><i class="text-<?= ((($average_review <= 1) && ($average_review <= 4)) ? 'warning' : 'secondary') ?> fa fa-star"></i></span>
                                                                    <span class="float-right"><i class="text-<?= ((($average_review <= 1) && ($average_review <= 5)) ? 'warning' : 'secondary') ?> fa fa-star"></i></span>
                                                                </p>
                                                                <div class="clearfix"></div>
                                                                <p><?= $rev['text'] ?></p>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                } else {
                                                    echo 'No review Yet';
                                                }
                                                ?>
                                            </div>
                                            <div class="card">

                                                <div class="card-body">
                                                    <h4>Review Now</h4>
                                                    <form action="" method="post" id="form">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                                <input type="text" name="name" class="form-control review data" required>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                                <input type="email" name="email" class="form-control review data" required>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Rating</label>
                                                                <select class="form-control" name="rating" class="form-control review data" required>
                                                                    <option value="5">Rate 5 Star</option>
                                                                    <option value="4">Rate 4 Star</option>
                                                                    <option value="3">Rate 3 Star</option>
                                                                    <option value="2">Rate 2 Star</option>
                                                                    <option value="1">Rate 1 Star</option>
                                                                </select>

                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Review</label>
                                                                <input type="text" name="title" class="form-control review data" required>
                                                            </div>
                                                            <div class="col-md-12 mb-3">

                                                                <input type="hidden" class="form-control" name="date_reviewed" value="<?= date(DATE_ATOM) ?>">

                                                            </div>
                                                            <div class="col-md-12 mb-3 text-center">
                                                                <button type="submit" class="btn btn-warning">Save review</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?= $product[0]['sdesc'] ?></p>
                        
                        <div class="stars">
                            <div class="">
                                <div class="price shop">
                                    <p class="bold-font dark_color">
                                        $ <span id="variant_price_text" style="font-size:1.5rem"><?= (!empty($product[0]['discounted_price'])) ? $product[0]['discounted_price'] : $product[0]['price'] ?></span>
                                        <span id="variant_old_price_text" style="font-weight:5;color:grey">
                                            <?php
                                            if (!empty($product[0]['discounted_price'])) {
                                            ?>
                                                <strike>$ <?= $product[0]['price'] ?></strike>
                                            <?php
                                            }
                                            ?>
                                        </span>
                                    </p>
                                    <a href="" class="bold-bold" style="color: #666; text-decoration: line-through;"> </a>
                                    <?php if ($product[0]['discount_per'] != 0) { ?><span class="text-success"><b>UPTO <?= $product[0]['discount_per'] ?> % OFF</b></span><?php } ?>
                                </div>
                            </div>
                            <div>
                                <!-- <p class="shop-buynow"><a href=""><u>Buy now pay later More Details</u> </a> </p> -->
                            </div>
                        </div>
                        <div class="stars">
                            <div class="" style="width: 100%">
                                <div class="price shop justify-content-between">
                                    <label for="quantity" class="bold-font dark_color">Quantity</label>
                                    <div class="quantity">
                                        <input type="number" min="1" max="9" step="1" value="1" name="qty" id="quantity">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- <p class="shop-buynow"><a href=""><u>Buy now pay later More Details</u> </a> </p> -->
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-btn col-md-12">
                        <?php
                        $product_variant = getRowById('bc_product_variants', 'product_id', $product[0]['id']);

                        if ($product_variant != '') {
                            // if (count($product_variant) > 1) {
                            echo ' <select name="variant" id="variant" class="dark_color font-weight-bolder"> 
                             
                             ';
                            foreach ($product_variant as $variant_row) {
                                $option = json_decode($variant_row['option_values'], true);
                        ?>
                                <option value="<?= $variant_row['id'] ?>--<?= $option[0]['label'] ?>--<?= $variant_row['sale_price'] ?>--<?= $variant_row['price'] ?>"><?= $option[0]['label'] ?></option>
                            <?php
                            }
                            echo '</select>';
                        } else {
                            ?>
                            <select name="" id="variant" class="dark_color font-weight-bolder d-none">
                                <option value="null">Variant not available</option>
                            </select>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="add-tocart col-md-12">
                        <input type="hidden" id="price" value="<?= $product[0]['discounted_price'] ?>" />
                        <input type="hidden" id="variant_id" value="0" />
                        <button class="theme-button addtocart" data-id="<?= $product[0]['id'] ?>" type="button">ADD TO CART</button>
                    </div>
                    <div class="shop-info d-flex col-md-12">
                        <p style="font-size: 12px;">In stock, ships within 1-2 days | Free shipping & returns?</p>
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <p class="description shop_des"></p>

                    <?= $product[0]['description'] ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="faq-wrapper">
                                <!--=======  single faq  =======-->
                                <div class="single-faq">
                                    <div class="accordion" id="shippingInfo">
                                        <?php
                                        $i = 1;
                                        if (!empty($specs)) {
                                            foreach ($specs as $row) {
                                        ?>
                                                <div class="card">
                                                    <div class="card-header" id="heading<?php echo $i; ?>">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link <?= ($i == 1) ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="<?= ($i == 1) ? 'false' : 'true' ?>" aria-controls="collapse<?php echo $i; ?>">
                                                                <?php echo $row['specs_title']; ?>
                                                                <i class="float-right tabIcon fa fa-<?= ($i == 1) ? 'minus' : 'plus' ?>"></i>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapse<?php echo $i; ?>" class="collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#shippingInfo">
                                                        <div class="card-body">
                                                            <?php echo $row['specs_desc']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                                $i++;
                                            }
                                        } else {
                                            // echo  'No contact query exists';
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="product_cta_action">
                                    <div class="product_cta_store br-right">
                                        <a href="#">
                                            <img src="<?= base_url() ?>assets/images/product_store.png">
                                            <p>See in store</p>
                                        </a>
                                    </div>
                                    <div class="product_cta_store">
                                        <img src="<?= base_url() ?>assets/images/product_call_image.png">
                                        <p>Call us now</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--=======  End of product details description area  =======-->
            </div>
        </div>
    </div>
</div>

<?php
if ($product[0]['sec_heading'] != '' || $product[0]['sec_image'] != '') {
?>
    <div class="collection-container mb-5">
        <div class="row   text-center">
            <div class="col-lg-12">
                <h2 class="bold-font"><?= $product[0]['sec_heading'] ?></h2>
            </div>
            <div class="col-lg-12">
                <img class="st_product_section_image" loading="lazy" src="<?= base_url('uploads/product/') ?><?= $product[0]['sec_image'] ?>" alt="<?= $product[0]['sec_heading'] ?>">
            </div>
        </div>
    </div>
<?php
}
?>


<!--================== Featured section starts ======================-->


<?php
if (!empty($product[0]['title_one'] && $product[0]['image_url_one']) || !empty($product[0]['title_two'] && $product[0]['image_url_two'])) {
?>

    <div class="category-area section-space--small padding-top gray_bg section_padding">
        <div class="container">

            <?php
            if (!empty($product[0]['title_one'] && $product[0]['image_url_one'])) {
            ?>

                <div class="row">
                    <div class="col-lg-12">

                        <!--=======  ctaegory grid wrapper  =======-->

                        <div class="category-grid-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--=======  single-category  =======-->
                                    <div class="image_box">

                                        <img src="<?= base_url() ?>uploads/product/<?= $product[0]['image_url_two'] ?>" width="100%" alt="">

                                    </div>


                                    <!--=======  End of single-category  =======-->
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <!--=======  single-category  =======-->

                                    <div class="collection-content ">
                                        <h2 class="bold-font"><?= $product[0]['title_one'] ?>
                                        </h2>

                                        <p class="font-r"><?= $product[0]['description_one'] ?> </p>
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
            if (!empty($product[0]['title_two'] && $product[0]['image_url_two'])) {
            ?>

                <div class="row mt-50 margin-t">
                    <div class="col-lg-12">

                        <!--=======  ctaegory grid wrapper  =======-->

                        <div class="category-grid-wrapper">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <!--=======  single-category  =======-->
                                    <div class="collection-content ">
                                        <h2 class="bold-font"><?= $product[0]['title_two'] ?>
                                        </h2>

                                        <p class="font-r"><?= $product[0]['description_two'] ?></p>
                                    </div>


                                    <!--=======  End of single-category  =======-->
                                </div>

                                <div class="col-md-6">
                                    <!--=======  single-category  =======-->

                                    <div class="image_box">

                                        <img src="<?= base_url() ?>uploads/product/<?= $product[0]['image_url_two'] ?>" width="100%" alt="">

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

<!--================== Featured section ends ======================-->



<div class="cta-area blue-bg collection-container margin-bottom">
    <div class="container">
        <div class="title text-center" style="margin-bottom: 70px;">
            <h2 class="text-white">Let our sleep experts help you discover better sleep.</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-10 cta_box">
                <img src="<?= base_url() ?>assets/images/collections/msg.png" alt="">
                <h6>Chat Us</h6>
                <p>Helping you sleep better is<br> our business… let s talk</p>
                <a href="">Chat Now</a>
            </div>
            <div class="col-lg-4 col-md-10 cta_box">
                <img src="<?= base_url() ?>assets/images/collections/call.png" alt="">
                <h6>Call Us</h6>
                <p>Our Sleep Experts are here to help<br> you build your perfect bed.</p>
                <a href="">+61 8 9242 4333</a>
            </div>
            <div class="col-lg-4 col-md-10 cta_box">
                <img src="<?= base_url() ?>assets/images/ep_location_dark.png" alt="">
                <h6>Visit Us</h6>
                <p>Want to try our beds in person? Come</br> visit a Italian Beds showroom near you.
                </p>
                <a href="">Store Location</a>
            </div>
        </div>
    </div>
</div>




<div class="collection-container">
    <?php $this->load->view('components/video') ?>
</div>



<!-- ============Testimonial============ -->

<?php $this->load->view('components/review') ?>


<?php $this->load->view('components/video_section') ?>

<div class="page-content-wrapper">
    <!--=======  product carousel area  =======-->

    <div class="section-title-area text-center">
        <h2 class="section-title bold-font my_heading">Experience great sleep and holistic wellness</h2>
    </div>

    <?php $this->load->view('components/product_slider') ?>
    <!--=======  End of product carousel area  =======-->
</div>
<?php $this->load->view('components/faq') ?>

<?php include 'includes/up_footer.php' ?>
<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>

<script>
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

    });
</script>

<script>
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