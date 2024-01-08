<?php

namespace UserStories\UserStoryOne\ViewModel;

use Magento\Catalog\Api\Data\CategoryInterface;
class Test {

    protected ModOne $category;
    protected array $arrData;
    protected string $strData;

    public function __construct(CategoryInterface $modInterface, array $arrData , string $strData )
    {
        $this->category = $modInterface;
        $this->arrData = $arrData;
        $this->strData = $strData;
    }

    public function displayParams() : string {
        $wholeData = "\nThe value of Array is : ";
        foreach ($this->arrData as $value)
        {
            $wholeData .= " " . $value; 
        }
        $wholeData .= "\nThe value of the String is : " . $this->strData . "";

        return $wholeData;
    }
}