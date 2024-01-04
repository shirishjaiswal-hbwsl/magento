<?php 
namespace Shirish\DependencyInjectionModule\Model\VirtualType;
class UppercaseName extends Name {

    public function getName(string $name) :string {
        return strtoupper(parent::getName($name));
    }
}