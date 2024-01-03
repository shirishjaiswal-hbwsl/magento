<?php

namespace Shirish\DependencyInjectionModule\Model;

class Main {
    protected array $data;
    protected Injectable $injectable;

    public function __construct(Injectable $injectable, array $data = [])
    {
        $this->data = $data;
        $this->injectable = $injectable;
    }
    public function getId() : string {
        return $this->data["id"];
        // data paramater should match which is present inside the di.xml
    }
    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }
}