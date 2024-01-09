<?php

namespace UserStories\UserStoryThree\Observer\Frontend;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\LayoutInterface;
use UserStories\UserStoryThree\Logger\Logger;
class EventObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    
    public function execute(Observer $observer) {
        // var_dump($observer->getEvent()->getData('response'));
        $response = $observer->getEvent()->getData('response');
        // $layoutHtml = $response->getOutput();
        $body = $response->getBody();
        $this->logger->info($body);
    }
}
