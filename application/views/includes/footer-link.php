<!-- Vendor JS -->
<script src="<?= base_url() ?>assets/js/vendors.js"></script>
<!--<script src="<?= base_url() ?>assets/js/lightbox-plus-jquery.min.js"></script>-->

<!-- Active JS -->
<script src="<?= base_url() ?>assets/js/active.js"></script>

<!--=====  End of JS files ======-->


<!-- Revolution Slider JS -->
<script src="<?= base_url() ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url() ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() ?>assets/revolution/revolution-active.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/custom.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


<script>
    function load_product() {
        $.ajax({
            url: '<?= base_url("Ajax/fetch_cart") ?>',
            method: 'POST',
            success: function(response) {
                $('#cartlist').html(response);

            }
        });
    }

    function load_cart() {
        $.ajax({
            url: '<?= base_url("Ajax/fetch_cart_list") ?>',
            method: 'POST',
            success: function(response) {
                $('#fullcartlist').html(response);

            }
        });
         
        load_count();
        load_total_count();
        load_total_discount();
        load_tax();
        $('.promo_amt').html(<?= ((sessionId('promo_amt') != '')? sessionId('promo_amt'):'0.00') ?>);
    }
    function load_count() {
        $.ajax({
            url: '<?= base_url("Ajax/fetch_cart_count") ?>',
            method: 'POST',
            success: function(response) {
                $('.cart_count').html(response);

            }
        });
    }
    function load_total_count() {
        $.ajax({
            url: '<?= base_url("Ajax/load_total_count") ?>',
            method: 'POST',
            success: function(response) {
                $('.cart_total_count').html(response);

            }
        });
        $.ajax({
            url: '<?= base_url("Ajax/load_total") ?>',
            method: 'POST',
            success: function(response) {
                $('.cart_total').html(response);

            }
        });
    }
    function load_total_discount() {
        $.ajax({
            url: '<?= base_url("Ajax/load_total_discount") ?>',
            method: 'POST',
            success: function(response) {
                $('.product_discount').html(response);

            }
        });
    }
    function load_tax() {
        $.ajax({
            url: '<?= base_url("Ajax/load_tax") ?>',
            method: 'POST',
            success: function(response) {
                $('.product_tax').html(response);

            }
        });
    }
    
    load_product();
    load_cart();
</script>
<script>
    let question = document.querySelectorAll(".s_question");

    question.forEach(question => {
        question.addEventListener("click", event => {
            const active = document.querySelector(".s_question.active");
            if (active && active !== question) {
                active.classList.toggle("active");
                active.nextElementSibling.style.maxHeight = 0;
            }
            question.classList.toggle("active");
            const answer = question.nextElementSibling;
            if (question.classList.contains("active")) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = 0;
            }
        })
    })
</script>
<script>
    $(document).on('click', '.addtocart', function() {
        var pid = $(this).data('id');
        var variant = $('#variant').val();
        var quantity = $('#quantity').val();
 
        if (variant != '') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('Ajax/addto_cart') ?>",
                data: {
                    pid: pid,
                    variant: variant,
                    quantity: quantity
                },
                success: function(response) { 
                    alert('Your product is added');
                    load_product();
                    load_cart();
                }
            });
        } else {
            alert('Select variant to continue.');
        }
    });
    $(document).on('click', '.removeCart', function() {
        var pid = $(this).data('id');
        //  console.log(pid);
        $.ajax({
            method: "POST",
            url: "<?= base_url('Ajax/delete_item') ?>",
            data: {
                pid: pid
            },
            success: function(response) {
                alert('Item removed');
                load_product();
                load_cart();
            }
        });
    });
    $(document).on('change', '.updatecart', function() {
        var rowid = $(this).data('id');
        var qty = $('#qty' + rowid).val();
        console.log(qty);
        $.ajax({
            method: "POST",
            url: "<?= base_url('Ajax/update_qty') ?>",
            data: {
                rowid: rowid,
                qty: qty
            },
            success: function(response) {

            }
        });
        load_cart();
    });
</script>
</body>

</html>