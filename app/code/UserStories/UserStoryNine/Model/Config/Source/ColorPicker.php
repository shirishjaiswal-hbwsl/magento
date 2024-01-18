<?php

namespace UserStories\UserStoryNine\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
// User Story One Six
class ColorPicker implements ArrayInterface
{
    public function toOptionArray()
    {
        $colorArray = [
            ['value' => 'White', 'label' => 'White'],
            ['value' => 'Red', 'label' => 'Red'],
            ['value' => 'Green', 'label' => 'Green'],
            ['value' => 'Blue', 'label' => 'Blue'],
            ['value' => 'Yellow', 'label' => 'Yellow']
        ];
        return $colorArray;
    }
}
