<?php

namespace Shirish\TestModuleTwo\Block\Layout;
use Magento\Framework\View\Element\Template;
// creating the generic template
class Index extends Template {
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle("Shirish Layout");
        }

        return $this;
    }
}