<?php

namespace UserStories\UserStorySeven\Block;

use Magento\Framework\View\Element\Template;

class Text extends Template
{
    public function getMessage()
    {
        return "This is normal Message from default template";
    }
}
