<?php
namespace Everon\Console\Controller;

use Everon\Console\Controller;
use Everon\Interfaces;

class Adm extends Controller implements Interfaces\Controller
{
    public function handle()
    {
        switch (strtolower($this->getRequest()->getGetParameter('cache'))) {
            case 'clear':
                $this->clear();
                break;
        }
    }
    
    public function clear()
    {
        $this->lines[] = "Clearing: ... clear cache";
    }
}