<?php

namespace UserStories\UserStorySeven\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    /**
     * Summary of message
     * @return string
     */
    protected $message;

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $layout = $this->getLayout();
        $block = $layout->getBlock('product.info.main');
        if ($block) {
            $layout->createBlock(Message::class);
        }

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function _afterToHtml($html)
    {
        return "AfterHTML : This is Message";
    }
}
