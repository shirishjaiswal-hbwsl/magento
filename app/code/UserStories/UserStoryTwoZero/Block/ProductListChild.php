<?php

namespace UserStories\UserStoryTwoZero\Block;

use Magento\Catalog\Block\Product\ListProduct;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;


use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;
use Magento\Catalog\Helper\Output as OutputHelper;

class ProductListChild extends ListProduct
{
    protected $getSalableQuantityDataBySku;

    public function __construct(
        GetSalableQuantityDataBySku $getSalableQuantityDataBySku,
        \Magento\Catalog\Block\Product\Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        Data $urlHelper,
        array $data = [],
        ?OutputHelper $outputHelper = null
    ) {
        $this->getSalableQuantityDataBySku = $getSalableQuantityDataBySku;
        parent::__construct(
            $context,
            $postDataHelper,
            $layerResolver,
            $categoryRepository,
            $urlHelper,
            $data,
            $outputHelper
        );
    }

    public function getLoadProductCollection()
    {
        $collection = $this->getLoadedProductCollection();

        foreach ($collection as $product) {
            $data = $this->getSalableQuantityDataBySku->execute($product->getSku())[0]['qty'];
            dump($data);
            // if ($data > 100000) {
            //     $product->setData('salableQty', $data);
            // } else {
            //     $product->setData('salableQty', $data);
            // }
            $product->setData('salableQty', $data);
        }
        return $collection;
    }

    public function salableIs($product)
    {
        $product->getSku();
        $data = $this->getSalableQuantityDataBySku->execute($product->getSku())[0]['qty'];
        dump($data);
        if ($data > 1) {
            return true;
        } else {
            return false;
        }
        // $product->setData('salableQty', $data);
    }
}
