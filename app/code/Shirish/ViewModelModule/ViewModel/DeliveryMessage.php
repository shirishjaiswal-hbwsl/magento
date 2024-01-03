<?php

// namespace 

namespace Shirish\ViewModelModule\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMessage implements ArgumentInterface {

    public function getMessage(): string
    {
        return "Lorem10 ipusum should come from the database";
    }
}