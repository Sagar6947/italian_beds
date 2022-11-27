<div class="footer-area">
    <!-- footer---- -->
    <div class="footer-navigation-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-custom-xl-4 col-lg-4">
                    <div class="row mobile_footer_colume">
                        <div class="col-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget__title mb-3">Shop</h4>
                                <nav class="footer-widget__navigation">
                                    <ul>
                                        <?php
                                        if ($category) {
                                            foreach ($category as $cat) {
                                                if ($cat['parent_id'] == 0){
                                                    echo '<li><a href="' . base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) . '">' . $cat['name'] . '</a></li>';
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget__title mb-3">Support</h4>
                                <nav class="footer-widget__navigation">
                                    <ul>
                                        <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
                                        <li><a href="<?= base_url('contact-us') ?>">Contact Us</a></li>
                                        <li><a href="<?= base_url('warranty') ?>">Warranty</a></li>
                                        <li><a href="<?= base_url('faq') ?>">Faq</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-custom-xl-4 col-lg-4">
                    <div class="row">
                        
                        <div class="col-6 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget__title mb-3">Others</h4>
                                <nav class="footer-widget__navigation">
                                    <ul>
                                        <li><a href="<?= base_url('our-blogs') ?>">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-custom-xl-4 col-lg-4">
                    <div class="footer-widget footer-widget--two">
                        <h4 class="footer-widget__title mb-3">Catch up on the latest snooze</h4>
                        <p class="footer-widget__text text-white">Sign up for our newsletter for inspiration, exclusive previews & sleeping tips</p>

                        <div class="newsletter-form-area">
                            <form id="mc-form" class="mc-form">
                                <div class="footer-widget__newsletter-form">
                                    <input type="email" placeholder="Enter your email address" required>
                                    <button type="submit dark_color">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="footer-widget footer-widget--two">
                        <ul class="footer-widget__social-links">
                            <li><a href="<?= $contactinfo['facebook'] ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?= $contactinfo['instagram'] ?>" title="LinkedIn"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?= $contactinfo['youtube'] ?>" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container wide">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text text-left">
                        copyright &copy; <?= date('Y') ?> <a href="#">Italian Beds</a>. All Rights Reserved
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-text text-right">
                        <ul style="display: flex; align-items: center; justify-content: center; gap: 10px;" class="footer-listi">
                            <li><a href="<?= base_url('after-sales-service') ?>">After sales services </a> |</li>
                            <li><a href="<?= base_url('terms-and-condition') ?>">Terms & Conditions </a> | </li>
                            <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy </a> | </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====================  End of footer  ====================-->
<!--====================  offcanvas items ====================-->

<!--=======  offcanvas mobile menu  =======-->
<?php include('mobile-nav.php') ?>
<!--=======  End of search overlay  =======-->
<!-- scroll to top  -->
<button class="scroll-top">
    <i class="fa fa-angle-up"></i>
</button>
<!-- end of scroll to top -->
<!--=============================================
    =            JS files        =
    =============================================-->