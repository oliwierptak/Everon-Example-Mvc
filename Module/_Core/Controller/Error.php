<?php

namespace Everon\Module\_Core\Controller;

use Everon\Dependency;
use Everon\Interfaces;
use Everon\Mvc\Controller as MvcController;

class Error extends MvcController implements Interfaces\MvcController
{
    public function show()
    {
        $t = $this->getView()->getTemplateFilename('show');
        dd($t->getPathname(), $this->getView(), $this->getViewManager()->getDefaultTheme());
    }
}