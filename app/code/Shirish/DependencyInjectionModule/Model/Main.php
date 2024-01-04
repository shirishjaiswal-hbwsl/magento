<?php

namespace Shirish\DependencyInjectionModule\Model;


class Main {


    // if we want the Id data to be dynamically come then we make use of array $data. 
    // The id will come from it.
    // but the data in $data will come from the di.xml file 

    // To store the data coming in $data we will store it in data
    protected array $data;

    protected Injectable $injectable;

    public function __construct(Injectable $injectable, array $data=[])
    {
        $this->injectable = $injectable;
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
}