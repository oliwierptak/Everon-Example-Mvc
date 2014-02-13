<?php

namespace Everon\Module\_Core\Controller;

use Everon\Dependency;
use Everon\Interfaces;
use Everon\Mvc\Controller as MvcController;

class Error extends MvcController implements Interfaces\MvcController
{
    public function show()
    {
        $this->getView()->set('error', 'Errrrrrroooooarrrrrr');
        $t = $this->getActionTemplate();
        $this->getView()->set('View.error', $t);
    }
    
    public function index()
    {
        $this->getView()->set('View.body', 'Default View yeah!');
    }
}