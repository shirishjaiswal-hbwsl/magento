<?php

namespace Shirish\TestModuleTwo\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface {

    protected $resultPageFactory;
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        // // overriding the title placed inside the layout dir file
        // $page->getConfig()->getTitle()->set("Page");
        // $page->getLayout()->getBlock("page.main.title")->setPagetitle("Developer");
        return $page;
    }
}