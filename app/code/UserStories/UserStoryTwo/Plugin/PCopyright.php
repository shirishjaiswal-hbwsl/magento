<?php

namespace UserStories\UserStoryTwo\Plugin;

use Magento\Theme\Block\Html\Footer;
class PCopyright
{
    public function afterGetCopyright(Footer $footer, $result) {
        $result = "Copyright-Shirish";
        return $result;
    }
}
