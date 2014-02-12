<?php
namespace Everon\View\Main;

use Everon\View\Main\Index as DefaultView;

class Error extends DefaultView
{
    public function show()
    {
        $this->set('title', 'Error');
    }
}
