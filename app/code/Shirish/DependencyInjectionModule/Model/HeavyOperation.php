<?php

namespace Shirish\DependencyInjectionModule\Model;

class HeavyOperation {
    protected string $name;

    public function __construct()
    {
        $this->init();
    }

    public function init() :void {
        $this->name = "Class HeavyOperation";
    }

    public function getName(): string
    {
        return $this->name;
    }

}