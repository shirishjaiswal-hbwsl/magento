<?php

namespace Shirish\DependencyInjectionModule\Model;

class Main {


    // if we want the Id data to be dynamically come then we make use of array $data. 
    // The id will come from it.
    // but the data in $data will come from the di.xml file 

    // To store the data coming in $data we will store it in data
    protected array $data;

    protected Injectable $injectable;

    // Here we have injected the NonInjectableFactory which will create NonInjectable object
    protected NonInjectableFactory $nonInjectableFactory;

    public function __construct(Injectable $injectable, NonInjectableFactory $nonInjectableFactory, array $data=[])
    {
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->data = $data;
    }
    
    public function getId () :string
    {
        // This id will come from di.xml
        return $this->data["id"];
    }

    public function getInjectable () :Injectable
    {
        return $this->injectable;
    }

    public function getNonInjectable () : NonInjectable
    {
        // this will  create an object of NonInjectable object and return it
        return $this->nonInjectableFactory->create();
    }

    // Difference between Injectable and NonInjectable classes
    // Injectable class will be called directly by class name and will give you every time the same instance whenever you call it
    // NonInjectable class will be called by using its Factory method and will give you new instance every time we call for it   
}