<?php

namespace UserStories\UserStoryTwo\Plugin;

use Magento\Catalog\Model\Product;

class POnSale
{
    public function afterGetName(Product $product, $result) {
        $price = $product->getPrice();

        if($price < 60) {
            return $result .= " - On Sale";
        }
    }
}
