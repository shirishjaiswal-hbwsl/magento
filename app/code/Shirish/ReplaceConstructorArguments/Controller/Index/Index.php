<?php

namespace Shirish\ReplaceConstructorArguments\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Monolog\Logger;

class Index implements ActionInterface {

    protected $resultPageFactory;
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set("This is Replace Constructor Arguments");
        return $resultPage;
    }
}