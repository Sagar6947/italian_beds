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
        <div class="col-lg-7">
          <?php
          if ($this->session->has_userdata('msg')) {
            echo $this->session->userdata('msg');
            $this->session->unset_userdata('msg');
          }
          ?>
          <div class="row">
            <!--=======  product details slider area  =======-->
            <div class="col-md-12 p-2">
              <div class="cart_heading ">
                <div style="padding: 10px 100px 10px 30px;">

                  <p class="sitemaps m-0">Home > Cart > Checkout</p>
                  <h2 class="bold-font dark_color">Checkout</h2>
                  <h4 class="bold-font dark_color">1. Shipping info</h4>

                </div>

                <div class="n_shipment-info">
                  <div class="ship-info_heading row justify-content-between">

                    <!-- <h4 class="bold-font dark_color"> <?= (!$this->session->has_userdata('user_id')) ? "You are not logged in, Login" : "1. Shipping info" ?></h4> -->

                  </div>

                  <?php
                  // if (!$this->session->has_userdata('user_id')) {
                  ?>

                  <!-- <form action="<?= base_url('Home/login') ?>" method="post">
                      <div class="row d-none">
                        <div class="col-sm-6">
                          <div class="form-group" autocomplete="off">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">

                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group" autocomplete="off">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        </div>
                        <input type="submit" value="Submit" id="submit" class="megamenu_btn cart_ad" style="padding: 10px 0 !important; text-align: center;">
                      </div>
                      <div id="emailHelp" class="form-text"><a href="<?= base_url('register') ?>">Not a member ? Register now</a></div>
                    </form> -->

                  <?php
                  // } else {
                  ?>


                  <form action="<?= base_url('Home/chechout_save') ?>" method="post">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">First Name</label>
                          <input type="text" name="first_name" class="form-control rounded-0" value="<?= (($checkout == '') ? '' : $checkout['first_name']) ?>" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Last Name</label>
                          <input type="text" name="last_name" class="form-control rounded-0" value="<?= (($checkout == '') ? '' : $checkout['last_name']) ?>" required>

                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Street Address </label>
                          <input type="text" name="address1" class="form-control rounded-0" placeholder="Address" value="<?= (($checkout == '') ? '' : $checkout['address1']) ?>" required>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Apartment Number, Unit, Floor, etc.</label>
                          <input type="text" name="address2" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= (($checkout == '') ? '' : $checkout['address2']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Zip Code</label>
                          <input type="text" name="postal_code" class="form-control rounded-0" required value="<?= (($checkout == '') ? '' : $checkout['pincode']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">City</label>
                          <input type="text" name="city" class="form-control rounded-0" required value="<?= (($checkout == '') ? '' : $checkout['city']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">State</label>
                          <select name="state_or_province" id="stateOrProvinceCode" class="form-control rounded-0" required>
                            <option value="">Select State Or Province</option>
                            <?php
                            $country = getRowById('bc_states', 'country_id', '14');
                            foreach ($country as $row) {

                              echo '<option value="' . $row['iso2'] . '" ' . (($checkout == '') ? '' : (($row['iso2'] == $checkout['state']) ? 'selected' : '')) . '>' . $row['name'] . '</option>';
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 d-none">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Country</label>
                          <select name="country_code" id="countryCode" class="form-control rounded-0" required>
                            <!-- <option>Select country</option> -->
                            <?php
                            $country = getRowById('bc_countries', 'id', 14);
                            foreach ($country as $row) {
                            ?>
                              <option value="<?= $row['iso2']; ?>" selected><?= $row['name']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Phone Number* </label>
                          <input type="text" name="phone" class="form-control rounded-0" value="<?= (($checkout == '') ? '' : $checkout['number']) ?>" required>

                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Email Address*</label>
                          <input type="email" name="email" class="form-control rounded-0" value="<?= (($checkout == '') ? '' : $checkout['email']) ?>" required>
                        </div>
                      </div>
                      <div class="col-sm-12 text-left">
                        <h5 class=" bold-font dark_color">Billing Address</h5>
                        <div class="row pl-3">
                          <input name="shipping_address" value="0" type="radio" checked>
                          <label for="shipping_ship" class="radio-custom-label">Same as Shipping Address</label>
                        </div>
                        <div class="row pl-3">
                          <input name="shipping_address" value="1" type="radio">
                          <label for="shipping_diff" class="radio-custom-label">Use a different billing Address</label>
                        </div>
                        <br>
                      </div>
                      <div class="col-sm-12 billing" style="display:none;">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Billing Street Address </label>
                          <input type="text" name="billing_address1" class="form-control billing_box rounded-0" placeholder="Address" value="<?= (($checkout == '') ? '' : $checkout['billing_address1']) ?>">
                        </div>
                      </div>
                      <div class="col-sm-12 billing" style="display:none;">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Billing Apartment Number, Unit, Floor, etc.</label>
                          <input type="text" name="billing_address2" class="form-control billing_box rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= (($checkout == '') ? '' : $checkout['billing_address2']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12 billing" style="display:none;">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Billing Zip Code</label>
                          <input type="text" name="billing_postal_code" class="form-control billing_box rounded-0" value="<?= (($checkout == '') ? '' : $checkout['billing_pincode']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12 billing" style="display:none;">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Billing City</label>
                          <input type="text" name="billing_city" class="form-control billing_box rounded-0" value="<?= (($checkout == '') ? '' : $checkout['billing_city']) ?>">

                        </div>
                      </div>
                      <div class="col-sm-12 billing" style="display:none;">
                        <div class="form-group" autocomplete="off">
                          <label for="exampleInputEmail1">Billing State</label>
                          <select name="billing_state_or_province" id="stateOrProvinceCode" class="form-control billing_box rounded-0">
                            <option value="">Select State Or Province</option>
                            <?php
                            $country = getRowById('bc_states', 'country_id', '14');
                            foreach ($country as $row) {

                              echo '<option value="' . $row['iso2'] . '" ' . (($checkout == '') ? '' : (($row['iso2'] == $checkout['billing_state']) ? 'selected' : '')) . '>' . $row['name'] . '</option>';
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <input type="hidden" name="promocode" id="promocode" value="" />
                        <input type="hidden" name="promocode_amt" id="promocode_amt" value="0" />
                        <button type="submit" class="megamenu_btn cart_ad p-2 pl-5 pr-5"> Next: Delivery Method </button>
                      </div>



                    </div>
                  </form>

                  <?php
                  // }
                  ?>
                  <div class="row">
                    <div class="col-md-12 mt-4">
                      <h4 class="bold-font " style="font-weight: normal;color: #c7c5c5;">2. Delivery Methods</h4>
                    </div>
                    <div class="col-md-12 mt-4">
                      <h4 class="bold-font  " style="font-weight: normal;color: #c7c5c5;">3. Payment Info</h4>
                    </div>
                  </div>


                </div>
              </div>

              <!--=======  End of product details description area  =======-->
            </div>

          </div>
        </div>
        <div class="col-lg-5">
          <div class="standard_shipment_wrapper row flex-column sidebar_ship_wrapper">
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
          </div>
          </br>
          <div class="afterpay_container">
            <div class="price_el row justify-content-between">
              <span>Price (<span class="cart_count"></span> items)</span>
              <span>$ <span class="cart_total"></span></span>
            </div>
            <div class="price_el row justify-content-between">
              <span>Product Discounts</span>
              <span>$ <span class="product_discount"></span></span>
            </div>
            <div class="price_el row justify-content-between">
              <span>Promo(s)</span>
              <span>$ <span class="promo_amt"></span></span>
            </div>
            <!-- <div class="price_el row justify-content-between">
              <span>Gift Cards</span>
              <span>$0.00</span>
            </div> -->
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
              <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Add
              </a>
              <div class="collapse col-md-12" id="collapseExample">
                <div class="card card-body">
                  <h6>Select promocode </h6>
                  <span class="promo_msg"></span>
                  <?php

                  $promocode = getAllRow('promocode');
                  if (!empty($promocode)) {
                    foreach ($promocode as $row) {
                  ?>
                      <p>
                        <input type="radio" name="promo" value="<?= $row['pid']; ?>" <?= ((sessionId('promo_id') != '') ? ((sessionId('promo_id') == $row['pid']) ? 'checked' : '') : '') ?>>
                        <span class="text-uppercase"><b><?= $row['title']; ?></b></span><br>
                        <?= $row['description']; ?>

                        <hr class="m-0">
                      </p>
                  <?php
                    }
                  }
                  ?>
                  <p>
                    <input type="radio" name="promo" value="0">
                    <span class=""><b>None</b></span><br>

                  </p>

                </div>
              </div>
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

  <?php include 'includes/up_footer.php' ?>



  <!--====================  footer ====================-->

  <?php include 'includes/footer.php' ?>

  <?php include 'includes/footer-link.php' ?>
  <script>
    $('#asguest').click(function() {
      $('#passdiv').hide();
      $('#submit2').show();
      $('#submit').hide();
      $('#password').removeAttr('required');
      var mail = $('#email').val();
      // console.log(df);
      $.ajax({
        method: "POST",
        url: "Ajax/create_login",
        data: {
          mail: mail
        },
        success: function(response) {
          window.location.href = "<?= base_url('checkout') ?>";
        }
      });
    });
    $("input[name='shipping_address']").click(function() {
      var radioValue = $("input[name='shipping_address']:checked").val();
      if (radioValue == 1) {
        $(".billing").show();
        $(".billing_box").prop('required', true);
      } else {
        $(".billing").hide();
        $(".billing_box").prop('required', false);
      }
    });
    $("input[name='promo']").click(function() {
      var promo = $("input[name='promo']:checked").val();
      if (promo == 0) {
        $("#promocode").val(0);
        $("#promocode_amt").val(0);
      } else {
        $.ajax({
          method: "POST",
          url: "<?= base_url() ?>Ajax/get_promo",
          data: {
            promo: promo
          },
          success: function(response) {
            if (response == 0) {
              $("#promocode").val(0);
              $("#promocode_amt").val(0);
              $(".promo_amt").text(0);
              $(".promo_msg").html('<span class="text-danger">Promocode not applicable</span>');
            } else {
              $("#promocode").val(promo);
              $("#promocode_amt").val(response);
              $(".promo_amt").text(response);
              $(".promo_msg").html('');
            }
          }
        });
      }

    });
  </script>
  <script>
    // $('#countryCode').change(function() {
    //   var countryCode = $('#countryCode').val();
    //   $.ajax({
    //     method: "POST",
    //     url: "Ajax/get_country_name",
    //     data: {
    //       countryCode: countryCode
    //     },
    //     success: function(response) {
    //       $('#country').val(response);
    //     }
    //   });
    //   $.ajax({
    //     method: "POST",
    //     url: "Ajax/get_state",
    //     data: {
    //       countryCode: countryCode
    //     },
    //     success: function(response) {
    //       $('#stateOrProvinceCode').html(response);
    //     }
    //   });
    // });
    // var countryCode = $('#countryCode').val();
    // $.ajax({
    //   method: "POST",
    //   url: "Ajax/get_country_name",
    //   data: {
    //     countryCode: countryCode
    //   },
    //   success: function(response) {
    //     $('#country').val(response);
    //   }
    // });
    // $.ajax({
    //   method: "POST",
    //   url: "Ajax/get_state",
    //   data: {
    //     countryCode: countryCode
    //   },
    //   success: function(response) {
    //     $('#stateOrProvinceCode').html(response);
    //   }
    // });
    // $('#stateOrProvinceCode').change(function() {
    //   var stateOrProvinceCode = $('#stateOrProvinceCode').val();
    //   $.ajax({
    //     method: "POST",
    //     url: "Ajax/get_state_name",
    //     data: {
    //       stateOrProvinceCode: stateOrProvinceCode
    //     },
    //     success: function(response) {
    //       $('#stateOrProvince').val(response);
    //     }
    //   });
    // });
  </script>