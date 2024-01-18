<?php

namespace UserStories\UserStoryNine\Model\Config\Source;

// use Magento\Framework\Option\ArrayInterface;

class YesNo implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [['value' => true, 'label' => __('Yes')], ['value' => false, 'label' => __('No')]];
    }
}
