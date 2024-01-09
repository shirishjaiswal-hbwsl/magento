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
    }
}
