<?php

namespace UserStories\UserStorySeven\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }


    public function execute()
    {
        $page = $this->pageFactory->create();

        $page->getconfig()->getTitle()->set("User Story Seven");

        return $page;
    }
}
