<?php
declare(strict_types=1);

if (isset($products)):
    foreach ($products as $product) : ?>
        <div>
            <h2><?= $product->GetName() ?></h2>
            <p>Price (tax included): €<?php echo $product->GetPriceWithTax(2); ?></p>
        </div>
    <?php endforeach;
endif; ?>
