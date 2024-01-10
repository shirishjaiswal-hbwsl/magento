<?php

namespace UserStories\UserStoryFour\Logger;

use Magento\Framework\Logger\Handler\Base;
use UserStories\UserStoryFour\Logger\Logger;

class Handler extends Base
{
    protected $loggerType = Logger::INFO;

    protected $fileName = '/var/log/cSystem.log';
}
