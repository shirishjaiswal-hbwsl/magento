<?Php

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
        $page = $page->getConfig()->getTitle()->set("Layout");
        return $page;
    }
}