<?php

namespace Shirish\DependencyInjectionModule\Model;

// implementing InjectableInterface
class Injectable implements InjectableInterface {

    // modifying the content to just clarify that the InjectableInterface is working 
    public function getId() :string {
        return "This is id of Injectable Class : by using InjectableInterface";
    }
}