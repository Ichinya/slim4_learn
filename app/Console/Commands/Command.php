<?php

namespace App\Console\Commands;

class Command extends \Boot\Foundation\Console\Command
{
    protected string $bin = '.\vendor\bin\phinx ';

    public function __construct($name = null)
    {
        $this->bin = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $this->bin);
        parent::__construct($name = null);
    }
}
