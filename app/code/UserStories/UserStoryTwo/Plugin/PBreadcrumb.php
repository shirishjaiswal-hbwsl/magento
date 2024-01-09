<?php

namespace UserStories\UserStoryTwo\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs;
class PBreadcrumb
{
    public function beforeAddCrumb(Breadcrumbs $breadcrumbs, $crumbName, $crumbInfo) 
    {
        $crumbInfo['label'] = "Hummingbird" . $crumbInfo['label'];

        return [$crumbName, $crumbInfo];
    }
}
