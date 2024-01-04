<?php 
namespace Shirish\DependencyInjectionModule\Model\VirtualType;

class Name {
    public function getName(string $name): string
    {   
        return $name;
    }
}