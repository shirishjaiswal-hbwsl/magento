<?php

namespace UserStories\UserStoryThree\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use UserStories\UserStoryThree\Logger\Logger;
class EventObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public function execute(Observer $observer) {
        $product = $observer->getEvent()->getData('product');
        $productName = $product->getName();
        $this->logger->info($productName);

        // Create an observer that logs the name of the product along with additional details like SKU, price, Quantity per Source and Salable Quantity
        $product = $observer->getEvent()->getData('product');
        $this->logger->info("Product SKU: " . $product->getSku());
        $this->logger->info("Product Price: " . $product->getPrice());
        $this->logger->info("Total Product Quantity: " . $product->getQty());
        if ($product->isSalable()) {
            $this->logger->info("Salable Quantity: " . $product->getQty());
        }
    }
}
