<?php

namespace Shirish\TestModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
// use Magento\Framework\View\Result\PageFactory;

class Forward implements ActionInterface {
    //forwars is used to forward the request to another page within the same url
    protected $forwardFactory;
    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }
    public function execute()
    {
        return $this->forwardFactory->create()->forward("page");
    }
}