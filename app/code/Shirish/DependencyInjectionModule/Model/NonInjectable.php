<?php

namespace Shirish\DependencyInjectionModule\Model;

class NonInjectable {

    public function getId(): string
    {
        return "NonInjectable Class Id";
    }
}