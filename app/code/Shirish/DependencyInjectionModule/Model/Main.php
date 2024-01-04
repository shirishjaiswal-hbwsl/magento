<?php

namespace Shirish\DependencyInjectionModule\Model;

use Shirish\DependencyInjectionModule\Model\NonInjectableInterfaceFactory;
use Shirish\DependencyInjectionModule\Model\VirtualType\DefaultName;

class Main {


    // if we want the Id data to be dynamically come then we make use of array $data. 
    // The id will come from it.
    // but the data in $data will come from the di.xml file 

    // To store the data coming in $data we will store it in data
    protected array $data;

    protected Injectable $injectable;

    // Here we have injected the NonInjectableFactory which will create NonInjectable object
    protected NonInjectableInterfaceFactory $nonInjectableInterfaceFactory;

    // used InjectableInterface to get Injectable Object but to let know magento to give us the Injectable object after calling InjectableInterface we need to specify it inside the di.xml

    // NonInjectableInterfaceFactory will return the NonInjectableInterfaceFactory

    // AbstractUtil $util,
    protected Util $util;

    // injecting AbstractUtil to get the object of Util which is configurd inside the di.xml

    protected HeavyOperation $heavyOperation;
    
    protected DefaultName $defaultName;
    public function __construct(InjectableInterface $injectable, 
                                NonInjectableInterfaceFactory $nonInjectableInterfaceFactory, 
                                AbstractUtil $util,
                                HeavyOperation $heavyOperation,
                                DefaultName $defaultName,
                                array $data=[])
    {
        $this->injectable = $injectable;
        $this->nonInjectableInterfaceFactory = $nonInjectableInterfaceFactory;
        $this->util = $util;
        $this->heavyOperation = $heavyOperation;
        $this->defaultName = $defaultName;
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
        return $this->nonInjectableInterfaceFactory->create();
    }

    // Difference between Injectable and NonInjectable classes
    // Injectable class will be called directly by class name and will give you every time the same instance whenever you call it
    // NonInjectable class will be called by using its Factory method and will give you new instance every time we call for it   

    public function getAbstractUtil () : AbstractUtil
    {
        return $this->util;
    }

    public function getHeavyOperation () : HeavyOperation
    {
        return $this->heavyOperation;
    }

    public function getDefaultName () :DefaultName 
    {
        return $this->defaultName;
    }
}