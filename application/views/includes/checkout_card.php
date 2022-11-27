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
        <div class="price_el row justify-content-between ">
            <span>Taxes (Inclusive)</span>
            <span>$ <span class="product_tax"></span></span>
        </div>
        <!-- <div class="price_el row justify-content-between border-bottom border-top m-1">
            <span>Promo Code</span>
            <a href="">Add</a>
        </div> -->
        <div class="price_el row justify-content-between   border-bottom border-top m-1">
            <span>Order total</span>
            <a href="" class="bold-font">$
                <span class="cart_total_count"></span>
            </a>
        </div>
        <div class="price_el row justify-content-between m-1">
            <a href="<?= base_url('Home/initiate_checkout') ?>" class="megamenu_btn cart_ad checkoutbtn">Proceed to Checkout</a>
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