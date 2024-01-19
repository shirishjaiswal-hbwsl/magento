<?php

namespace UserStories\UserStoryOneEight\Plugin;

use Magento\Catalog\Model\Product;

class ProductPlugin
{
    public function afterGetPrice(Product $product, $result)
    {
        $result += 1.79;

        return $result;
    }
}
