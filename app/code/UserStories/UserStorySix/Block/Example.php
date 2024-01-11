<?php

namespace UserStories\UserStorySix\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template
{
    public function _toHtml()
    {
        $html = '<h2>';
        $html .= 'This is implementation of _toHtml() method';
        $html .= '</h2>';

        return $html;

        // return "<h2>Hellow World!!!</h2>";
    }

    public function _afterToHtml($html)
    {
        $html .= "<p>This is addition of _afterToHtml() method</p>";
        return $html;
    }
}
