<?php 

namespace Shirish\InjectableAndNonInjectableModule\Service;

use Shirish\InjectableAndNonInjectableModule\Model\Supplier;

class Supply {
    protected Supplier $supplier;

    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function getSupplier(): Supplier
    {
        $this->supplier->setCode("ABCD-1");
        return $this->supplier;
    }
}