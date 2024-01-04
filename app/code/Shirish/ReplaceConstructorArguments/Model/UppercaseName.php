<?php 

namespace Shirish\ReplaceConstructorArguments\Model;


class UppercaseName extends DefaultName {
    public function getName(): string
    {
        return strtoupper(parent::getName());
    }
}