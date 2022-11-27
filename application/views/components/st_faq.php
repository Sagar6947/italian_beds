<div class="page-content-wrapper faq-padding">

    <!--====================  faq area ====================-->

    <div class="faq-area section-space" style="margin-top: 12%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="faq_ul">
                        <?php
                        if (!empty($category)) {
                            foreach ($category as $cat) {
                                $children = getRowById('bc_category', 'parent_id', $cat['id']);
                        ?>
                                <li><a href="#cat<?= $cat['id'] ?>" class="dark_color"><?= $cat['name'] ?></a></li>
                                <?php
                                if ($children != '') {
                                    foreach ($children as $subcat) {
                                ?>
                                        <li><a href="#cat<?= $subcat['id'] ?>"><?= $subcat['name'] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                        <?php
                            }
                        }
                        ?>
                        <li><a href="#OrderShipping">Order & Shipping</a></li>
                        <li><a href="#ReturnExchange">Return & Exchange</a></li>
                        <li class="f-call"><a href="">Call Us &nbsp;<i class="fa fa-arrow-right"></i></a></li>
                        <li class="f-email"><a href="">Email Us &nbsp;<i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="faq-wrapper">
                        <!--=======  single faq  =======-->
                        <?php
                        if (!empty($category)) {
                            foreach ($category as $cat) {
                                $children = getRowById('bc_category', 'parent_id', $cat['id']);
                        ?>
                                <div class="single-faq" id="<?= $cat['name'] ?>">
                                    <h2 class="faq-title semi-bold dark_color"><?= $cat['name'] ?></h2>
                                    <div class="accordion" id="<?= $cat['name'] ?>1">
                                        <?php
                                        $faq_data = getDataByIdInOrderLimit('faq', 'cat_id', $cat['id'], 'fid', 'DESC', 6, 0);
                                        if (!empty($faq_data)) {
                                            $i = 1;
                                            foreach ($faq_data as $row) {

                                        ?>
                                                <div class="card">
                                                    <div class="card-header faq-icon" id="heading<?= $cat['id'] ?><?= $i ?>">
                                                        <h5 class="mb-0" style="background: #f1f3fc;">
                                                            <button class="btn btn-link <?= ($i == 1) ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?= $cat['id'] ?><?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $cat['id'] ?><?= $i ?>">
                                                                <?= $row['f_title']; ?>
                                                            </button>
                                                            <i class="fa fa-angle-down"></i>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse<?= $cat['id'] ?><?= $i ?>" class="collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?= $cat['id'] ?><?= $i ?>" data-parent="#shippingInfo">
                                                        <div class="card-body">
                                                            <p><?= $row['f_description']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                if ($children != '') {
                                    foreach ($children as $subcat) {
                                ?>
                                        <div class="single-faq" id="<?= $subcat['name'] ?>">
                                            <h2 class="faq-title semi-bold dark_color"><?= $subcat['name'] ?></h2>
                                            <div class="accordion" id="<?= $subcat['name'] ?>1">
                                                <?php
                                                $faq_data = getDataByIdInOrderLimit('faq', 'cat_id', $subcat['id'], 'fid', 'DESC', 6, 0);
                                                if (!empty($faq_data)) {
                                                    $i = 1;
                                                    foreach ($faq_data as $row) {

                                                ?>
                                                        <div class="card">
                                                            <div class="card-header faq-icon" id="heading<?= $subcat['id'] ?><?= $i ?>">
                                                                <h5 class="mb-0" style="background: #f1f3fc;">
                                                                    <button class="btn btn-link <?= ($i == 1) ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?= $subcat['id'] ?><?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $subcat['id'] ?><?= $i ?>">
                                                                        <?= $row['f_title']; ?>
                                                                    </button>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </h5>
                                                            </div>

                                                            <div id="collapse<?= $subcat['id'] ?><?= $i ?>" class="collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?= $subcat['id'] ?><?= $i ?>" data-parent="#shippingInfo">
                                                                <div class="card-body">
                                                                    <p><?= $row['f_description']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                        <?php
                            }
                        }
                        ?>
                        <div class="single-faq" id="OrderShipping">
                            <h2 class="faq-title semi-bold dark_color">Order & Shipping</h2>
                            <div class="accordion" id="shippingInfo">
                                <?php
                                $faq_data = getDataByIdInOrderLimit('faq', 'cat_id', 99, 'fid', 'DESC', 6, 0);
                                if (!empty($faq_data)) {
                                    $i = 1;
                                    foreach ($faq_data as $row) {

                                ?>
                                        <div class="card">
                                            <div class="card-header faq-icon" id="heading<?= $i ?>">
                                                <h5 class="mb-0" style="background: #f1f3fc;">
                                                    <button class="btn btn-link <?= ($i == 1) ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                                        <?= $row['f_title']; ?>
                                                    </button>
                                                    <i class="fa fa-angle-down"></i>
                                                </h5>
                                            </div>

                                            <div id="collapse<?= $i ?>" class="collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?= $i ?>" data-parent="#shippingInfo">
                                                <div class="card-body">
                                                    <p><?= $row['f_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="single-faq" id="ReturnExchange">
                            <h2 class="faq-title semi-bold dark_color">Return & Exchange</h2>
                            <div class="accordion" id="shippingInfo">
                                <?php
                                $faq_data = getDataByIdInOrderLimit('faq', 'cat_id', 98, 'fid', 'DESC', 6, 0);
                                if (!empty($faq_data)) {
                                    $i = 1;
                                    foreach ($faq_data as $row) {
                                ?>
                                        <div class="card">
                                            <div class="card-header faq-icon" id="heading<?= $i ?>">
                                                <h5 class="mb-0" style="background: #f1f3fc;">
                                                    <button class="btn btn-link <?= ($i == 1) ? '' : 'collapsed' ?>" data-toggle="collapse" data-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                                        <?= $row['f_title']; ?>
                                                    </button>
                                                    <i class="fa fa-angle-down"></i>
                                                </h5>
                                            </div>

                                            <div id="collapse<?= $i ?>" class="collapse <?= ($i == 1) ? 'show' : '' ?>" aria-labelledby="heading<?= $i ?>" data-parent="#shippingInfo">
                                                <div class="card-body">
                                                    <p><?= $row['f_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of faq area  ====================-->


</div>