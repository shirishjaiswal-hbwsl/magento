<?php
namespace Shirish\DependencyInjectionModule\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class Example extends Template {
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}