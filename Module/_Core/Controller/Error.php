<?php

namespace Everon\Module\_Core\Controller;

use Everon\Dependency;
use Everon\Mvc;

class Error extends Mvc\Controller implements Mvc\Interfaces\Controller
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