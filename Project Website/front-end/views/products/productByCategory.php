<?php
require_once("./views/helper/cart.helper.php");
$cartHelper = new CartHelper($products);
?>
<div class="container">
    <div class="products-content">
        <h2>
        </h2>
    </div>
    <div class="row " style="height: 300px;">

        <?php
        $cartHelper = new CartHelper($products);
        echo $cartHelper->renderItems($products);

        ?>
    </div>

</div>