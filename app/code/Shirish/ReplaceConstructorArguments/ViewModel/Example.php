<?php
namespace Shirish\ReplaceConstructorArguments\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Shirish\ReplaceConstructorArguments\Model\DefaultName;

class Example implements ArgumentInterface{
    protected $defaultName;
    public function __construct (DefaultName $defaultName) {
       $this->defaultName = $defaultName;
    }
    public function getName(): string
    {
        return $this->defaultName->getName();
    }

}