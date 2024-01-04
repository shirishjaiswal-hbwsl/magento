<?php
namespace Shirish\InjectableAndNonInjectableModule\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Shirish\InjectableAndNonInjectableModule\Service\Demand;
use Shirish\InjectableAndNonInjectableModule\Service\Supply;

class Example implements ArgumentInterface {

    protected $supply;
    protected $demand;
    public function __construct(Supply $supply, Demand $demand)
    {
        $this->supply = $supply;
        $this->demand = $demand;
    }

    public function getSupply(): Supply
    {
        return $this->supply;
    }

    public function getDemand(): Demand
    {
        return $this->demand;
    }
}