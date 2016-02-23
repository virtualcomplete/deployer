<?php
namespace Deployer\Exception;

class TaskException extends \Exception
{

    public $stderr;
    public $stdout;

    public function getStderr()
    {
        return $this->stderr;
    }

    public function getStdout()
    {
        return $this->stdout;
    }

}
