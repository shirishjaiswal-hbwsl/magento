<?php

namespace Shirish\InjectableAndNonInjectableModule\Model;
// which ever class has its state should not make it behave like Injectable object coz the state needs to be changed and every time passing the same object is not correct.
class Supplier {
    protected string $code;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}