<?php
namespace Shirish\WidgetModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Widget implements ActionInterface {

    protected $pageFactory;
    public function __construct(PageFactory $pageFactory) 
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute() 
    {
        return $this->pageFactory->create();
    }
}