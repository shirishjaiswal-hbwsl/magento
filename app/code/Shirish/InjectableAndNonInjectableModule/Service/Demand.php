<?php

namespace Shirish\InjectableAndNonInjectableModule\Service;

use Shirish\InjectableAndNonInjectableModule\Model\Item;
use Shirish\InjectableAndNonInjectableModule\Model\Supplier;
use Shirish\InjectableAndNonInjectableModule\Model\ItemFactory;


class Demand {

    protected $supplier;
    protected $itemFactory;
    public function __construct(Supplier $supplier, ItemFactory $itemFactory)
    {
        $this->supplier = $supplier;
        $this->itemFactory = $itemFactory;
    }

    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }

    public function getItem(): Item
    {
        return $this->itemFactory->create();
    }
}