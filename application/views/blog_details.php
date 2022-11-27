<?php include 'includes/header-link.php' ?>
<!--=======  header offer sticker  =======-->

<?php include 'includes/header.php' ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-white"><a href="<?= base_url() ?>">Italian Beds</a></li>
    <li class="breadcrumb-item  text-white  active" aria-current="page">Blogs</li>
  </ol>
</nav>
<div class="page-content-wrapper padding-top-100">
    <!--=======  single product slider details area  =======-->

    <div class="single-product-slider-details-area">
        <div class="container">
            <div class="row text-center">
                 
                <div class="col-lg-12 mt-5">
                    <!--=======  product details description area  =======-->

                    <!--<div class="product-details-description-wrapper  mb-5">-->
                    <!--    <h1 class="item-title bold-font dark_color"><?= $blog['title'] ?></h1>-->
                        
                        
                    <!--</div>-->
                    
                    
                </div>
                
                
                <div class="col-lg-12 order-1">
                        <!--=======  blog post wrapper  =======-->

                        <div class="blog-post-wrapper">
                            <div class="row">
                                <?php
                                if(!empty($blogview)){
                                    foreach($blogview as $row){
                                ?>
                                
                                <div class="col-lg-12">
                                    <!--=======  single post  =======-->

                                    <div class="single-blog-post">
                                        <div class="single-blog-post__image">
                                            <a href="">
                                                <img src="<?= setImage($row['image'], 'uploads/blogs/') ?>" style="width: 50% !important" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="single-blog-post__content">
                                            <h3 class="post-title"><a><?= ucfirst($row['title']) ?></a></h3>
                                            <p class="post-meta"><a href="#"><?= convertDatedmy($row['created']) ?></a></p>
                                            <p class="post-excerpt"><?= $row['blog_body'] ?></p>
                                        </div>
                                    </div>

                                    <!--=======  End of single post  =======-->
                                </div>
                                
                                <?php
                                }
                                }
                                ?>
                                
                            </div>
                        </div>

                        <!--=======  End of pagination wrapper  =======-->
                    </div>
                
                <!--=======  End of product details description area  =======-->
            </div>
        </div>
    </div>
</div>



 
<?php $this->load->view('components/faq') ?>


<?php include 'includes/up_footer.php' ?>



<!--====================  footer ====================-->

<?php include 'includes/footer.php' ?>

<?php include 'includes/footer-link.php' ?>
 