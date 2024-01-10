<?php

namespace UserStories\UserStoryFour\Observer;


use Magento\Framework\App\RouterList;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use UserStories\UserStoryFour\Logger\Logger;

class RoutesObserver implements ObserverInterface
{
    protected RouterList $routerList;
    protected $logger;
    public function __construct(RouterList $routerList, Logger $logger)
    {
        $this->routerList = $routerList;
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $routers = [];
        foreach ($this->routerList as $router) {
            $routers[] = get_class($router) . "\n";
        }

        $this->logger->info(implode('\n', $routers));

    }

        
}
