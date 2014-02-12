<?php
namespace Everon\View\Dark;

use Everon\View\Dark\Index as DefaultView;

class Error extends DefaultView
{
    public function show()
    {
        $this->set('title', 'Error');
    }
}
