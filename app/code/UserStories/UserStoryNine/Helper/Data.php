<?php

namespace UserStories\UserStoryNine\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    // const XML_PATH_MYMODULE = 'user_story_9/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {
        // return $this->getConfigValue(self::XML_PATH_MYMODULE . 'general/' . $code, $storeId);
        return $this->getConfigValue('generalsection/custom_configuration/' . $code, $storeId);
    }
}
