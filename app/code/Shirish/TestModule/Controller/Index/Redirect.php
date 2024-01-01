<?php
namespace Shirish\TestModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect implements ActionInterface {

    private $redirectFactory;
    public function __construct(RedirectFactory $redirect)
    {
        $this->redirectFactory = $redirect;
    }
    public function execute()
    {
        $resultRedirect = $this->redirectFactory->create();
        $resultRedirect->setUrl("/name/index/page");
        return $resultRedirect;
    }
}