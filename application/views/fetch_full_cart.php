<?php
$i = 1;
foreach ($this->cart->contents() as $items) :
    // print_R($items);
?>
    <div class="cart_item_box">
        <div class="cart_item_info">
            <div class="cart_item_image">
                <img src="<?= setImage($items['image'], 'uploads/product/'); ?>" alt="<?php echo $items['name']; ?>">
            </div>
            <div class="cart_item_detail">
                <h3 class="cart_item_name bold-font dark_color"><?php echo $items['name']; ?></h3>

                <?php
                $vari = explode('--', $items['variant']);

                if (count($vari) > 1) {

                    echo '<div class="m-2"> <span class="mr-5 dark_color para_text">' . $vari[1] . ' Size </span></div>';
                } else {
                    // echo $items['variant'];
                }
                ?>
                <div class="qty-container">
                    <button class="qty-btn-minus btn-rounded mr-1" type="button"><i class="fa fa-minus"></i></button>
                    <input type="number" value="<?php echo $items['qty']; ?>" id="qty<?= $items['rowid'] ?>" data-id="<?= $items['rowid'] ?>" class="input-qty input-rounded updatecart" min="1"/>
                    <button class="qty-btn-plus btn-rounded ml-1" type="button"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="cart_item_price">
            <a href="javascript:void(0)" class="remove removeCart btn btn-danger " data-id="<?= $items['rowid'] ?>">
                <div class="cross_icon pt-2"><i class="pe-7s-close"></i></div>
            </a>
            <div class="item_price">
                <span class="cart_price_font ml-1 bold-font dark_color">$<?php echo $this->cart->format_number((($items['discount_price'] == '')? $items['price']:$items['discount_price'])); ?></span>
                <p class="m-2 blue-color">$100 Off NewDay Mattress</p>
            </div>
        </div>
    </div>
    <!--=========================-->



<?php
    $i++;
endforeach;
?>