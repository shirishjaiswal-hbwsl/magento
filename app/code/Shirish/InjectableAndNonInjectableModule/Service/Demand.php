<?php

namespace Shirish\InjectableAndNonInjectableModule\Service;

use Shirish\InjectableAndNonInjectableModule\Model\Supplier;

class Demand {

    protected $supplier;
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }
}