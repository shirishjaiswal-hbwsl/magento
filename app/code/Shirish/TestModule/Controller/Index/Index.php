<?php
namespace Shirish\TestModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface {

    protected $rawfactory;
    protected $pageFactory;
    public function __construct(Raw $rawfactory) {
        $this->rawfactory = $rawfactory;
    }
    
    public function execute(){
        return $this->rawfactory->setContents("Completed");
    }
}