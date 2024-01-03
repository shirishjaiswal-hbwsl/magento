<?php

namespace Shirish\DependencyInjectionModule\Model;
class NonInjectable {
    //When we need New object each time we make use of NonInjectable object
    //will give the new instance every time we call for it using Factory
    // public function __construct()
    // {

    // }

    public function getId() : string {
        return "Noninjectable class";
    }
}