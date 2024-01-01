<?php
namespace Shirish\TestModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface {
    //use setup:di:comp if RawFactory is not created 

    protected $rawfactory;
    public function __construct(RawFactory $rawfactory) {
        $this->rawfactory = $rawfactory;
    }
    
    public function execute(){
        return $this->rawfactory->create()->setContents("RawFactory Completed");
    }
}