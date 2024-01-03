<?php
namespace Shirish\DependencyInjectionModule\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Shirish\DependencyInjectionModule\Model\Main;

class Example extends Template {
    // Magento will automatically inject the dependencies which are present inside the cosntructor
    protected $main;
    public function __construct(
        Context $context,
        Main $main,
        array $data = []
        )
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    public function getMain() :Main {
        return $this->main;
    }
}