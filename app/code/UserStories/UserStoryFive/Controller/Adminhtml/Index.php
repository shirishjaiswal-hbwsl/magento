<?php

namespace UserStories\UserStoryFive\Controller\Adminhtml;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    /**
     * Summary of request
     * @var \Magento\Framework\App\Console\request;
     */
    protected $request;

    protected $pageFactory;

    public function __construct(RequestInterface $request, PageFactory $pageFactory)
    {
        $this->$request = $request;
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        if ($this->request->getParam('access') == true) {
            var_dump("True");
            $page = $this->pageFactory->create();
            $page->getConfig()->getTitle()->set("True");
            return $page;
        }
    }
}
