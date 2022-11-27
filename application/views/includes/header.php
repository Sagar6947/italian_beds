<!-- <div class="header-offer-sticker text-center">
   <div class="container">
      <div class="row">
         <div class="col-lg-2">
            <a href="<?= base_url('contact-us') ?>">
               <p> <img src="<?= base_url() ?>/assets/images/ep_location.png"> &nbsp; Store Location</p>
            </a>
         </div>
         <div class="col-lg-8">
            <a href="<?= base_url('sale') ?>">
               <p> <span class="bold-font">Big Savings -</span> Get 15% off on all mattresses. Save up to <span class="bold-font">$463*</span> on a matteress. Use code <span class="bold-font">STAYCOMFY</span></p>
            </a>
         </div>
         <div class="col-lg-2">
            <a href="<?= base_url('contact-us') ?>">
               <p><img src="<?= base_url() ?>/assets/images/call.png"> &nbsp; Contact Us</p>
            </a>
         </div>
      </div>
   </div>
</div> -->
<!--=======  End of header offer sticker  =======-->
<!--====================  header area ====================-->
<div class="header-area header-area--one header-sticky">
   <!--=======  navigation area  =======-->
   <div class="header-navigation-area d-none d-lg-block">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-2">
               <div class="header-logo text-center">
                  <a href="<?= base_url() ?>">
                     <img src="<?= base_url() ?>assets/images/logo.PNG" class="img-fluid logo_image" alt="">
                  </a>
               </div>
            </div>
            <div class="col-md-5 col-lg-6">
               <div class="header-navigation-wrapper">
                  <nav>
                     <ul>
                        <li class="">
                           <a href="<?= base_url() ?>">Home</a>
                        </li>
                        <?php
                        if (!empty($category)) {
                           foreach ($category as $cat) {
                              $children = getRowById('bc_category', 'parent_id', $cat['id']);


                        ?>

                              <li <?= ((($children != '')) ? 'class="has-children"' : '') ?>>
                                 <a <?= ((($children != '')) ? 'href="javascript:void(0)"' : 'href="' . base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) . '"') ?>><?= $cat['name'] ?></a>
                                 <?php
                                 if ($children != '') {
                                 ?>
                                    <ul class="submenu submenu--column-1">
                                       <li>
                                          <ul>
                                             <li class="megamenu-title bold-font dark_color"><a href="<?= base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) ?>"><?= $cat['name'] ?></a></li>
                                             <?php
                                             if ($children) {
                                                foreach ($children as $subcat) {
                                             ?>
                                                   <li class="megamenu_li"><a href="<?= base_url('collection/' . $subcat['id'] . '/' . url_title($cat['name'], "dash", TRUE) . '/' . url_title($subcat['name'], "dash", TRUE)) ?>" class="dark_color"><?= $subcat['name'] ?></a>
                                                   <!-- <span>MOST POPULAR</span> -->
                                                </li>
                                             <?php
                                                }
                                             }
                                             ?>



                                          </ul>
                                          <!-- <a href="<?= base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) ?>" class="megamenu_btn"> See all <?= $cat['name'] ?></a> -->
                                       </li>
                                        
                                    </ul>
                              <?php
                                 }
                              }
                              ?>

                              </li>
                           <?php

                        }
                           ?>
                           <!-- <li class="">
                           <a href="">Pillow</a>
                        </li> -->
                           <!-- <li class="has-children">
                              <a href="<?= base_url('sale') ?>"><b>Sale</b></a>
                              
                           </li> -->

                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-md-5 col-lg-4">
               <div class="header-icon-area">
                  <div class="header-icon d-flex justify-content-end">
                     <ul class="header-icon__list header-icon__list header-icon__list header-icon__list--white-icon right-header-ul">
                        <!-- <li><a href="<?= base_url('about-us') ?>" class="right-links">Why Italian Beds</a></li>
                        <li><a href="<?= base_url('login') ?>" class="right-links">Track Order</a></li> -->
                        <li><a href="<?= base_url('all-reviews') ?>" class="right-links">Reviews</a></li>
                        <li>
                           <a href="#"><i class="fa fa-shopping-basket"></i></a>
                           <div class="minicart-wrapper">
                              <p class="minicart-wrapper__title">Your Cart</p>

                              <div class="minicart-wrapper__items ps-scroll" id="cartlist"></div>
                              <div class="minicart-wrapper__buttons mb-0">
                                 <?php
                                 if (count($this->cart->contents()) > 0) {
                                 ?>
                                    <a href="<?= base_url('cart') ?>" class="theme-button theme-button--minicart-button mb-0">View cart</a><br>
                                    <a href="<?= base_url('checkout') ?>" class="theme-button theme-button--minicart-button mb-0">Checkout</a>
                                 <?php
                                 } else {
                                 ?>
                                    <a href="<?= base_url('cart') ?>" class="theme-button theme-button--minicart-button mb-0">View cart</a>

                                 <?php
                                 }
                                 ?>

                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-user"></i></a>
                           <div class="minicart-wrapper">
                              <?php
                              if ($this->session->has_userdata('user_id')) {
                              ?>
                                 <div class="minicart-wrapper__buttons">
                                    <a href="<?= base_url('my-order') ?>" class="theme-button theme-button--minicart-button">My Orders</a>
                                    <a href="<?= base_url('Logout') ?>" class="theme-button theme-button--alt theme-button--minicart-button theme-button--minicart-button--alt mb-0">Logout</a>
                                 </div>
                              <?php
                              } else {
                              ?>
                                 <div class="minicart-wrapper__buttons">
                                    <a href="<?= base_url('login') ?>" class="theme-button theme-button--minicart-button">Sign in </a>
                                    <a href="<?= base_url('register') ?>" class="theme-button theme-button--alt theme-button--minicart-button theme-button--minicart-button--alt mb-0">Register</a>
                                 </div>
                              <?php
                              }
                              ?>


                              <!--<p class="minicart-wrapper__featuretext">Free Shipping on All Orders Over $100!</p>-->
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--=======  End of navigation area  =======-->

   <!--=======  mobile navigation area  =======-->

   <div class="header-mobile-navigation d-block d-lg-none p-1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-6 col-md-6">
               <div class="header-logo">
                  <a href="<?= base_url() ?>" class="mobile_logo">
                     <img src="<?= base_url() ?>assets/images/logo.PNG" class="img-fluid" alt="" style="width: 90px">
                  </a>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="mobile-navigation text-right">
                  <ul class="header-icon__list header-icon__list">
                     <!-- <li>
                        <a href="#"><i class="fa fa-heart-o"></i><span class="item-count">1</span></a>
                     </li> -->
                     <li>
                        <a href="<?= base_url('cart') ?>"><i class="fa fa-shopping-basket"></i>
                           <!-- <span class="item-count">3</span> -->
                        </a>
                     </li>
                     <li><a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a></li>
                  </ul>

               </div>
            </div>
         </div>
      </div>
   </div>

   <!--=======  End of mobile navigation area  =======-->
</div>