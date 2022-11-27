<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<!--====================  End of header area  ====================-->
<!--====================  hero slider area ====================-->

<!--<section class="home-banner about p-5" style="height:30vh"> -->

<!--    <div class="banner_content">-->
<!--        <h6 class="about-breadcrumbs semi-bold">User </h6>-->
<!--        <h4 class="semi-bold"> Sign in</h4>-->
<!--    </div>-->
<!--<div class="about_image">-->
<!--<img src="<?= base_url() ?>assets/images/Contact US.png" alt="" class="about-img">-->

<!--</div>-->
<!--</section>-->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-white"><a href="<?= base_url() ?>">Italian Beds</a></li>
    <li class="breadcrumb-item  text-white  active" aria-current="page">Order List</li>
  </ol>
</nav>



<section class="contactdiv3 gray-div" style="padding-top: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 bg-light p-3 ">
        <?php
        $i = 1;

        if ($order_details != '') {
          foreach ($order_details as $items) {
            $order_product = $this->CommonModal->getRowById('checkout_product', 'checkoutid', $items['id']);

        ?>
            <div class="card  mb-3 ">
              <div class="row p-3">
                <div class="col-sm-8">
                  <h4>Order Date - <?= $items['create_date'] ?></h4>
                  <h4>Order Id - #<?= $items['id'] ?></h4>
                  <h4>Payment status - <?= (($items['payment_status'] == 0) ? 'Initated' : (($items['payment_status'] == 1) ? 'Paid' : 'Failed')) ?></h4>
                </div>
                <div class="col-sm-4  align-self-center text-right "> <button type="button" data-toggle="modal" data-target="#exampleModal<?= $items['id'] ?>" class="btn btn-<?= (($items['status'] == 0) ? 'info' : (($items['status'] == 1) ? 'warning' : (($items['status'] == 2) ? 'danger' : (($items['status'] == 3) ? 'success' :  'secondary')))) ?>"> <?= (($items['status'] == 0) ? 'New order' : (($items['status'] == 1) ? 'On the way' : (($items['status'] == 2) ? 'Cancelled' : (($items['status'] == 3) ? 'Order completed' : '')))) ?>
                  </button></div>
              </div>

              <div class="card-body  ">
              <hr>
              <h4>Product List</h4>
                <?php
                foreach ($order_product as $produ) {
                  //   print_r($produ);
                ?>
                  <div class=" row">
                    <div class="comment-text  col-md-2 text-center">
                    <img src="<?= setImage($produ['product_img'], 'uploads/product/') ?>" style="height:80px;" />
                    </div>
                    <div class="comment-text  col-md-10 ">
                      <div class="comment-avatar-info row text-center mb-3">
                        <div class="col-md-3">
                          Product name: <br>
                          <h4><?= $produ['product_name'] ?>
                          </h4>
                          <h6><?= $produ['product_variant_name'] ?></h6>
                        </div>
                        <div class="col-md-3">
                          Product Price: <br>
                          <p>$ <?= $produ['product_price'] ?> </p>
                        </div>
                        <div class="col-md-3">
                          Product Qty: <br>
                          <p> <?= $produ['product_quantity'] ?> Unit</p>
                        </div>
                        <div class="col-md-3">
                          <h4> Total Amt.: <br> $ <?= $produ['product_price'] * $produ['product_quantity'] ?>
                          </h4>
                        </div>
                      </div>

                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<div class="lastdiv">

  <section class="clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h2 class="clients_head bold-font dark_color">#DesignedForWellness</h2>
          <p class="para_text">Speak to our expert sleep consultants and ensure all your sleep needs are met. Get their timely assistance by video, call or in-store.</p>

          <ul>
            <li>3/455 Scarborough Beach, Road Osborne Park, WA 6017</li>
            <li>Monday - Friday: 9am - 6pm</li>
            <li>Saturday Sunday: 10am - 7pm</li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="row text-center ">
            <div class="col-sm-4 text-center">
              <img src="<?= base_url() ?>assets/images/contact-us.png" alt="">
              <p class="margin-t dark_color">Contact Us</p>
            </div>
            <div class="col-sm-4 text-center">
              <img src="<?= base_url() ?>assets/images/showroom.png" alt="">
              <p class="margin-t dark_color">Showroom</p>
            </div>
            <div class="col-sm-4 text-center">
              <img src="<?= base_url() ?>assets/images/matandpilow.png" alt="">
              <p class="margin-t dark_color">Mattresses & Pillows</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>




<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>