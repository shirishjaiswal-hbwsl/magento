<?php 

namespace Shirish\InjectableAndNonInjectableModule\Model;

class Item {

    protected string $code = "";

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}