<?php

namespace Shirish\DependencyInjectionModule\Model;

class Main {
    protected array $data;
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
    public function getId() : string {
        return $this->data["id"];
        // data paramater should match which is present inside the di.xml
    }
}