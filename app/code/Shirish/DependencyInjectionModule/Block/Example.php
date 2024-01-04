<?php
namespace Shirish\DependencyInjectionModule\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Shirish\DependencyInjectionModule\Model\Main;

class Example extends Template {


    protected $main;
    // Injecting Main class inside the constructor
    public function __construct(Context $context, Main $main, array $data = [])
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    // will return the Injected Main object in the customer
    public function getMain() :Main {
        return $this->main;
    }
}