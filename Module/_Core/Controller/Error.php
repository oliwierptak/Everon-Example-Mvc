<?php

namespace Everon\Module\_Core\Controller;

use Everon\Dependency;
use Everon\Interfaces;

class Error extends \Everon\Console\Controller implements Interfaces\Controller
{
    public function show()
    {
        die('error.show');
    }
    
    public function index()
    {
        die('error.index');
    }
}