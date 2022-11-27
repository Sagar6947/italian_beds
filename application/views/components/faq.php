<div class="page-content-wrapper gray_bg faq-padding">

    <!--====================  faq area ====================-->

    <div class="faq-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-wrapper">


                        <!--=======  single faq  =======-->

                        <div class="single-faq">
                            <h2 class="faq-title semi-bold dark_color">Frequently Asked Questions</h2>
                            <div class="accordion" id="shippingInfo">
                                <?php
                                $faq_data = getAllDataWithLimitInOrder('faq', 'fid', 'DESC', 6, 0);
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
                                <!--<div class="card">-->
                                <!--    <div class="card-header faq-icon" id="headingTwo">-->
                                <!--        <h5 class="mb-0">-->
                                <!--            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
                                <!--                Do You Ship Internationally?-->
                                <!--            </button>-->
                                <!--            <i class="fa fa-angle-down"></i>-->
                                <!--        </h5>-->
                                <!--    </div>-->
                                <!--    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#shippingInfo">-->
                                <!--        <div class="card-body">-->
                                <!--            <p>At the moment, we only ship to Canada and the United States. For international orders, please contact internationalorders@dynamite.ca.-->
                                <!--                If you have any questions, please don’t hesitate to contact our Customer Experience Department by mail or by phone at 1-888-882-1138 (Canada) and 1-888-342-7243 (USA).</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="card">-->
                                <!--    <div class="card-header faq-icon" id="headingThree">-->
                                <!--        <h5 class="mb-0">-->
                                <!--            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                                <!--                How to Track My Order?-->
                                <!--            </button>-->
                                <!--            <i class="fa fa-angle-down"></i>-->
                                <!--        </h5>-->
                                <!--    </div>-->
                                <!--    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#shippingInfo">-->
                                <!--        <div class="card-body">-->
                                <!--            <p>Once your order has been shipped, you will receive an email with your tracking and shipping information. Simply click on the link in the email or select the ‘track order’ option here and enter your order number and email address or sign into your account.</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="card">-->
                                <!--    <div class="card-header faq-icon" id="headingFour">-->
                                <!--        <h5 class="mb-0">-->
                                <!--            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">-->
                                <!--                How Long Will It Take To Get My Package?-->
                                <!--            </button>-->
                                <!--            <i class="fa fa-angle-down"></i>-->
                                <!--        </h5>-->
                                <!--    </div>-->
                                <!--    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#shippingInfo">-->
                                <!--        <div class="card-body">-->
                                <!--            <p>We ship only on business days. Business days are from Monday to Friday, excluding holidays. Any order placed after 12 P.M. ET will be processed the following business day. Due to a high volume period, your order may take longer than anticipated. For remote locations, please add an additional 2-5 business day to each shipping method’s expected delivery time. If you are not sure whether your location is remote, please click here for all the details.</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="limit">
                                    <p>Showing 6 of <?= getNumRows('faq',[]); ?> <a href="<?= base_url('faq') ?>">Show ALL FAQs</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of faq area  ====================-->


</div>