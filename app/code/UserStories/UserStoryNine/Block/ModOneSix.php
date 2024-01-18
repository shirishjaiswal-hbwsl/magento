<?php

namespace UserStories\UserStoryNine\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use UserStories\UserStoryNine\Helper\ColorPicker;
// User Story One Six
class ModOneSix extends Template
{
    protected $helper;

    public function __construct(
        Context $context,
        ColorPicker $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    public function getColorPicker()
    {
        if ($this->isEnableColorPicker() == true) {
            return $this->helper->getColor('color_picker');
        }
    }

    public function isEnableColorPicker()
    {
        return $this->helper->isEnableColorPicker('enable_color_picker');
    }
}
