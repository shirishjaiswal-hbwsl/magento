<?php 

namespace Shirish\InjectableAndNonInjectableModule\Service;

use Shirish\InjectableAndNonInjectableModule\Model\Item;
use Shirish\InjectableAndNonInjectableModule\Model\ItemFactory;
use Shirish\InjectableAndNonInjectableModule\Model\Supplier;

class Supply {
    protected Supplier $supplier;
    protected ItemFactory $itemFactory;

    public function __construct(Supplier $supplier, ItemFactory $itemIactory)
    {
        $this->supplier = $supplier;
        $this->itemFactory = $itemIactory;
    }

    public function getSupplier(): Supplier
    {
        $this->supplier->setCode("ABCD-1");
        return $this->supplier;
    }
    public function getItem(): Item
    {
        $item = $this->itemFactory->create();
        $item->setCode("Item : 246");

        return $item;
    }
}