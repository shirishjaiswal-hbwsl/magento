<?php
namespace UserStories\UserStoryOneA\Model;
use Psr\Log\AbstractLogger;
use UserStories\UserStoryOneA\ViewModel\Test;

class Log extends AbstractLogger
{
    protected $logger;

    protected string $filePath;

    protected string $level;
    protected string $message;

    public function __construct(Test $test)
    {
        $this->filePath = "/var/www/html/magento2/var/log/custom.log";
        if(!$test->getArrData() && !$test->getStrData()) {
            $this->level = "ERROR";
            $this->message = "No Info Found";
        }
        else {
            $this->level = "INFO";
            $this->message = $test->displayParams();
        }
    }
    function callLog() {
        $this->log($this->level, $this->message);
    }
    public function log($level, $message, array $context = []): void
    {   
        $this->openAndWrite($level, $message);   
    }

    private function openAndWrite($level, $data) {
        $file = fopen($this->filePath,"a");
        fwrite($file, $level);
        fwrite($file, $data);
        fclose($file);
    }
}