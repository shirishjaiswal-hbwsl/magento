<?php

namespace UserStories\UserStoryTwo\Plugin;

use Magento\Theme\Block\Html\Header;

class PDefaultMessage
{
    public function afterGetWelcome (Header $header, $result) {
        $result = "This is new Welcome Message";
        return $result;
    }
}
