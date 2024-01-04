<?php
namespace Shirish\InjectableAndNonInjectableModule\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface {

    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        $page->getConfig()->getTitle()->set("Injectable and Non-Injectables Example");
        return $page;
    }
}