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
        //$t = $this->getView()->getTemplate('show', ['error'=>'errrorororoor']);
        //dd($t, $this->getView(), $this->getViewManager()->getDefaultTheme());
    }
    
    public function index()
    {
        $this->getView()->set('View.body', 'Default View yeah!');
    }
}