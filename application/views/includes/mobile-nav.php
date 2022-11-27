<div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
    <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
        <i class="pe-7s-close"></i>
    </a>

    <div class="offcanvas-wrapper">

        <div class="offcanvas-inner-content">
            <div class="offcanvas-mobile-search-area">
                <form action="#">
                    <input type="search" placeholder="Search ...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <nav class="offcanvas-naviagtion">
                <ul>
                    <li class="menu-item-has-children"><a href="<?= base_url() ?>">Home</a>
                    </li>
                    <?php
                     
                    foreach ($category as $cat) {
                        $children = getRowById('bc_category', 'parent_id', $cat['id']);
                    ?>
                        <li class="menu-item-has-children"><a <?= ((($children != '')) ? 'href="#"' : 'href="' . base_url('collection/' . $cat['id'] . '/' . url_title($cat['name'], "dash", TRUE)) . '"') ?>><?= $cat['name'] ?></a>
                            <?php
                            if ($children != '') {
                            ?>
                                <ul class="sub-menu">
                                    <?php
                                    foreach ($children as $subcat) {
                                    ?>
                                        <li class="megamenu_li"><a href="<?= base_url('collection/' . $subcat['id'] . '/' . url_title($subcat['name'], "dash", TRUE)) ?>" class="dark_color"><?= $subcat['name'] ?></a><span>MOST POPULAR</span></li>
                                    <?php

                                    }
                                    ?>


                                </ul>
                            <?php
                            }
                            ?>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="menu-item-has-children"><a href="#">Sale</a></li>
                    <!-- <li><a href="<?= base_url('about-us') ?>" class="right-links">Why Italian Beds</a></li>
                    <li><a href="<?= base_url('track') ?>" class="right-links">Track Order</a></li> -->
                    <li><a href="<?= base_url('review') ?>" id="search-icon-2" class="right-links">Reviews</a></li>
                </ul>
            </nav>

            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <div class="header-contact-info">
                        <ul class="header-contact-info__list">
                            <li><i class="pe-7s-phone"></i> <a href=""> +91 1122 33445 2</a></li>
                            <li><i class="pe-7s-mail-open"></i> <a href="mailto:info@italianbeds.com">info@italianbeds.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--Off Canvas Widget Social Start-->
                <div class="off-canvas-widget-social">
                    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                </div>
                <!--Off Canvas Widget Social End-->
            </div>
        </div>
    </div>

</div>

<!--=======  End of offcanvas mobile menu  =======-->

<!--====================  End of offcanvas items  ====================-->
<!--=======  search overlay  =======-->

<div class="search-overlay" id="search-overlay">

    <!--=======  close icon  =======-->

    <span class="close-icon search-close-icon">
        <a href="javascript:void(0)" id="search-close-icon">
            <i class="pe-7s-close"></i>
        </a>
    </span>

    <!--=======  End of close icon  =======-->

    <!--=======  search overlay content  =======-->

    <div class="search-overlay-content">
        <div class="input-box">
            <form action="#">
                <input type="search" placeholder="Search Products...">
            </form>
        </div>
        <div class="search-hint">
            <span># Hit enter to search or ESC to close</span>
        </div>
    </div>

    <!--=======  End of search overlay content  =======-->
</div>