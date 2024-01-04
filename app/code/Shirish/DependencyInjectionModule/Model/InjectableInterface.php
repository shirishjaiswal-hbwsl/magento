<?php 

namespace Shirish\DependencyInjectionModule\Model;

// for creating the object without explicetly mentioning their name using Factory Method
// but when we have an interface to be injected which should return the object then we need to define it in di.xml
// we will apply this on Injectable class

interface InjectableInterface {
    public function getId() :string;
}