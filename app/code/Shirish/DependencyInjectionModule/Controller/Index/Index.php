<?php

namespace Shirish\DependencyInjectionModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface {

    protected $resultPageFactory;
    public function __construct(PageFactory $pageFactory) {
        $this->resultPageFactory = $pageFactory;    
    }
    public function execute() 
    {
        $page = $this->resultPageFactory->create();  
        $page->getConfig()->getTitle()->set("Dependency Injection");
        return $page;
    }
}