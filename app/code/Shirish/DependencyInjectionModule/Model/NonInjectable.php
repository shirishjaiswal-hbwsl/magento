<?php

namespace Shirish\DependencyInjectionModule\Model;

class NonInjectable implements NonInjectableInterface{

    public function getId(): string
    {
        return "NonInjectable Class Id : called via NonInjectableInterfaceFactory";
    }
}