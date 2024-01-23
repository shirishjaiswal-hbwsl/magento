<?php

namespace UserStories\UserStoryTwoZero\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;

class View extends \Magento\Catalog\Block\Product\View
{
    protected $salableQty;

    public function __construct(
        GetSalableQuantityDataBySku $salableQty,
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        array $data = []
    ) {
        $this->salableQty = $salableQty;
        parent::__construct(
            $context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency
        );
    }
    public function isSalableQuantity()
    {
        $sku = $this->getProduct()->getSku();

        $data = $this->salableQty->execute($sku)[0]['qty'];
        // dump($data);
        if ($data > 1000000) {
            return true;
        } else
            return false;
    }
}