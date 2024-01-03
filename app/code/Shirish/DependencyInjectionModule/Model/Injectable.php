<?php

namespace Shirish\DependencyInjectionModule\Model;

class Injectable {
    // will igve the same instance whenever called doirectly used without any factory
    public function getId () : string {
        return "Class Injectable";
    }
}