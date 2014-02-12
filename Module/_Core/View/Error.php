<?php
namespace Everon\Module\_Core\View;

use Everon\View;
use Everon\Dependency;
use Everon\View as DefaultView;

class Error extends DefaultView
{
    public function show()
    {
        $this->getView()->set('error', 'the error message');
    }
    
    public function test()
    {
        $this->getView()->set('View.Body', 'no template: test error');
    }
}
