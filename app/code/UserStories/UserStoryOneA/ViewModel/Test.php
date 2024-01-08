<?php

namespace UserStories\UserStoryOneA\ViewModel;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test {

    protected ModOne $category;
    protected array $arrData;
    protected string $strData;

    public function __construct(CategoryInterface $modInterface, array $arrData , string $strData )
    {
        if ($modInterface instanceof IModOne) {
            $this->category = $modInterface;
        }
        else {
            throw new \Exception("TypeMisMatch");
        }
        $this->arrData = $arrData;
        $this->strData = $strData;
    }
    public function getArrData() {
        return $this->arrData;
    }
    public function getStrData() {
        return $this->strData;
    }
    public function displayParams() {
        $this->arrData['string'] = $this->strData;
        $json = json_encode( $this->arrData );
        return $json;
    }
}