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
                                <h2 class="bold-font dark_color">Checkout</h2>
                                
                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font dark_color">1. Shipping info</h4>
                                        <a href="#" class="sinfo_edit_btn bold-font">Edit</a>
                                    </div>
                                    
                                    <div class="ship_userinfo row justify-content-between">
                                        <div class="s-address_box row flex-column">
                                            <h5 class="address mb-1 bold-font dark_color">Address</h5>
                                            <span>Jai Sahu</span>
                                            <span>Sharp Rd</span>
                                            <span>Okmuglee, OK 74447 USA</span>
                                        </div>
                                        <div class="user_cta_info row flex-column">
                                            <h5 class="address mb-1 bold-font dark_color">Phone</h5>
                                            <span class="mb-1">(722) 081-7237</span>
                                            
                                            <h5 class="address mb-1 bold-font dark_color">Email</h5>
                                            <span>sodasdos@gmoil.com</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font dark_color">2. Delivery Methods</h4>
                                        <a href="#" class="sinfo_edit_btn bold-font">Edit</a>
                                    </div>
                                    
                                    <div class="ship_userinfo row justify-content-between">
                                        <div class="s-address_box row flex-column">
                                            <div class="delivery_shipment">
                                                <span>Shipment 1 of</span>
                                                <h4 class="address bold-font dark_color mb-0">Standard Shipping Only</h4>
                                                <span>Estimated to leave the warehouse in 2-3 weeks</span>
                                            </div>
                                            <div class="row flex-column queen_lines">
                                                <span>Elegance Mattress I Queen</span>
                                                <span>Elegance Mattress I Queen</span>
                                                <span>Elegance Mattress I Queen</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="n_shipment-info">
                                    <div class="ship-info_heading row justify-content-between">
                                        <h4 class="bold-font dark_color">3. Payment Info</h4>
                                        <a href="#" class="sinfo_edit_btn bold-font">Edit</a>
                                    </div>
                                    
                                    <div class="ship_userinfo row justify-content-between">
                                       <p>(All transactions are secure and encrypted)</p>
                                    </div>
                                    
                                    <div class="credit_card_payment">
                                        <div class="credit_card_payment row justify-content-between mt-5">
                                            <div class="">
                                                <img src="<?= base_url() ?>assets/images/credit_card.png" class="credit_card_img">
                                                <input id="radio-1" class="radio-custom" name="radio-group" type="radio" checked>
                                                <label for="radio-1" class="radio-custom-label">Credit Card</label>
                                            </div>
                                            <div>
                                                $2.764.18
                                            </div>
                                        </div>
                                        <form method="POST" action="#">
                                        <div class="row">
                                            <div class="col-sm-12">    
                                              <div class="form-group mt-5" autocomplete="off">
                                                <label for="exampleInputEmail1">Name on  Card*</label>
                                                <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>
                                            </div>
                                            <div class="col-sm-12">  
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Card Number*</label>
                                                <input type="tel" class="form-control rounded-0" id="exampleInputPassword1" placeholder="●●●● ●●●● ●●●● ●●●●">
                                              </div>
                                            </div>
                                            <div class="col-sm-6">  
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Expiration Date*</label>
                                                <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="MM/YY">
                                              </div>
                                            </div>  
                                            <div class="col-sm-6">  
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Security Code*</label>
                                                <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="●●●●">
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-5">
                                            <div class="col-sm-12 row justify-content-between align-items-center payment_option border-top border-bottom py-3">
                                                <div>
                                                    <input type="radio" name="upi_name" id="afterpay" value="0">
                                                    <img src="<?= base_url() ?>assets/images/cart_afterpay.png" class="afterpay_image ml-1">
                                                </div>
                                                <div>Buy now pay later <a href="#" class="lern_more blue-color">Learn More</a></div>
                                            </div>
                                             <div class="col-sm-12 row justify-content-between align-items-center payment_option border-top border-bottom py-3">
                                                <div>
                                                    <input type="radio" name="upi_name" id="afterpay" value="0">
                                                    <img src="<?= base_url() ?>assets/images/paypal.png" class="afterpay_image ml-1">
                                                </div>
                                            </div>
                                            <p class="gift_line">Have a Gift Card? <a href="#" class="blue-color">Add Gift Card</a></p>
                                        </div>
                                         
                                    
                                    </div>
                                    <!--<div>-->
                                    <!--    <input id="radio-2" class="radio-custom"name="radio-group" type="radio">-->
                                    <!--    <label for="radio-2" class="radio-custom-label">Second Choice</label>-->
                                    <!--</div>-->
                                    <!--<div>-->
                                    <!--    <input id="radio-3" class="radio-custom" name="radio-group" type="radio">-->
                                    <!--    <label for="radio-3" class="radio-custom-label">Third Choice</label>-->
                                    <!--</div>-->
                                    
                                    <div class="ship_userinfo row justify-content-between mt-5">
                                        <div class="s-address_box row flex-column">
                                            <h5 class="address mb-1 bold-font dark_color">Billing Address</h5>
                                            <div class="row justify-content-between align-items-center">
                                                <input id="shipping_ship" class="radio-custom" name="shipping_address" value="0" type="radio" checked>
                                                <label for="shipping_ship" class="radio-custom-label">Same as Shipping Address</label>
                                            </div>
                                            <div class="row justify-content-between align-items-center">
                                                <input id="shipping_diff" class="radio-custom" name="shipping_address" value="1" type="radio" checked>
                                                <label for="shipping_diff" class="radio-custom-label">Same as Shipping Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order_submit_btn">
                                        <input type="submit" value="Complete Order" class="megamenu_btn cart_ad checkoutbtn">
                                    </div>
                                    
                                    </form>
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