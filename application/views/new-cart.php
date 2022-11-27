<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->
<style>
    .fullimage {
        cursor: pointer;
    }
    
    .qty-container{
  display: flex;
  align-items: center;
 
}
.qty-container .input-qty{
  text-align: center;
  padding: 6px 10px;
  border: none;
  max-width: 40px;
}
.qty-container .qty-btn-minus,
.qty-container .qty-btn-plus{
  border: 1px solid #d4d4d4;
    padding: 6px 0px;
    font-size: 10px;
    height: 27px;
    width: 27px;
    transition: 0.3s;
    background: transparent; important;
}
.qty-container .qty-btn-plus{
  margin-left: -1px;
}
.qty-container .qty-btn-minus{
  margin-right: -1px;
}


/*---------------------------*/
.btn-cornered,
.input-cornered{
  border-radius: 4px;
}
.btn-rounded{
  border-radius: 50%;
}
.input-rounded{
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

                        <p class="sitemaps">Home > Cart </p>
                        
                        <!--=======  product details slider area  =======-->
                        
                        
                        <div class="col-md-12 p-2">
                            <div class="cart_heading ">
                                <h2 class="bold-font dark_color">Cart</h2>
                                
                                    <span class="total_num_items">3 items</span>
                                    <div class="main_cart_wrapper">
                                        <!--====Cart item starts====-->
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     <div class="qty-container">
                                        		        <button class="qty-btn-minus btn-rounded mr-1" type="button"><i class="fa fa-minus"></i></button>
                                        		    	<input type="text" name="qty" value="0" class="input-qty input-rounded"/>
                                        		        <button class="qty-btn-plus btn-rounded ml-1" type="button"><i class="fa fa-plus"></i></button>
                                        		    </div>
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <p class="m-2 blue-color">$100 Off NewDay Mattress</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     <div class="qty-container">
                                        		        <button class="qty-btn-minus btn-rounded mr-1" type="button"><i class="fa fa-minus"></i></button>
                                        		    	<input type="text" name="qty" value="0" class="input-qty input-rounded"/>
                                        		        <button class="qty-btn-plus btn-rounded ml-1" type="button"><i class="fa fa-plus"></i></button>
                                        		    </div>
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <p class="m-2 blue-color">$100 Off NewDay Mattress</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     <div class="qty-container">
                                        		        <button class="qty-btn-minus btn-rounded mr-1" type="button"><i class="fa fa-minus"></i></button>
                                        		    	<input type="text" name="qty" value="0" class="input-qty input-rounded"/>
                                        		        <button class="qty-btn-plus btn-rounded ml-1" type="button"><i class="fa fa-plus"></i></button>
                                        		    </div>
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <p class="m-2 blue-color">$100 Off NewDay Mattress</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <!--====Cart item ends====-->
                                        
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-2">
                            <div class="cart_heading ">
                                <h2 class="bold-font dark_color mb-5">You Might Also Like:</h2>
                                    <div class="main_cart_wrapper">
                                        <!--====Cart item starts====-->
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <p class="width-90">Protect your bed from food, spills, and other life surprises without Sacrificing comfort Or support</p>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <a href="" class="megamenu_btn cart_ad">Quick Odd</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <p class="width-90">Protect your bed from food, spills, and other life surprises without Sacrificing comfort Or support</p>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <a href="" class="megamenu_btn cart_ad">Quick Odd</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart_item_box">
                                            <div class="cart_item_info">
                                                <div class="cart_item_image">
                                                    <img src="<?= base_url() ?>assets/images/elegance.png">
                                                </div>
                                                <div class="cart_item_detail">
                                                     <h3 class="cart_item_name bold-font dark_color">Elegance Mattress</h3>
                                                     <p class="width-90">Protect your bed from food, spills, and other life surprises without Sacrificing comfort Or support</p>
                                                     <div class="m-2">
                                                     <span class="mr-5 dark_color para_text">Queen</span><a href="#" class="dark_color para_text">Edit</a>
                                                     </div>
                                                     
                                                </div>
                                            </div>
                                            <div class="cart_item_price">
                                                <div class="cross_icon"><i class="pe-7s-close"></i></div>
                                                <div class="item_price">
                                                    <strike class="cart_price_font">$6,899</strike><span class="cart_price_font ml-1 bold-font dark_color">$5,099.00</span>
                                                    <a href="" class="megamenu_btn cart_ad">Quick Odd</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <!--====Cart item ends====-->
                                        
                                    </div>
                            </div>
                        </div>


                </div>
               
                <!--=======  End of product details description area  =======-->
            </div>
             <div class="col-lg-4">
                <div class="afterpay_container">
                    <h3 class="bold-font dark_color">Buy now pay later</h3>
                    <p class="para_text">Select Afterpay at Checkout</p>
                    <img src="<?= base_url() ?>assets/images/cart_afterpay.png">
                    <p class="text-center para_text">Monthly payments with as IOW as 0% APR financing</p>
                </div>     
                </br>
                <div class="afterpay_container">
                    <div class="price_el row justify-content-between">
                        <span>Price (3 items)</span>
                        <span>$2,611.00</span>
                    </div>
                    <div class="price_el row justify-content-between">
                        <span>Product Discounts</span>
                        <span>-$100.00</span>
                    </div>
                    <div class="price_el row justify-content-between">
                        <span>Promo(s)</span>
                        <span>-$0.00</span>
                    </div>
                    <div class="price_el row justify-content-between">
                        <span>Gift Cards</span>
                        <span>-$0.00</span>
                    </div>
                    <div class="price_el row justify-content-between">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="price_el row justify-content-between">
                        <span>Taxes</span>
                        <span>$253.18</span>
                    </div>
                    <div class="price_el row justify-content-between border-bottom border-top m-1">
                        <span>Promo Code</span>
                        <a href="">Add</a>
                    </div>
                    <div class="price_el row justify-content-between m-1">
                        <span>Order total</span>
                        <a href="" class="bold-font">$2.764.1</a>
                    </div>
                    <div class="price_el row justify-content-between m-1">
                        <a href="" class="megamenu_btn cart_ad checkoutbtn">Proceed to Checkout</a>
                    </div>
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


    var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 0) {
    $n.val(amount-1);
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