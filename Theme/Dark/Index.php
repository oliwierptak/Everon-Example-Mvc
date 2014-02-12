<?php
namespace Everon\View\Dark;

use Everon\Interfaces;
use Everon\Helper;
use Everon\View;

class Index extends View
{
    use Helper\Arrays;

    public function __construct($template_directory, array $vars, $default_extension)
    {
        $vars['AdminMenuItems'] = [];
        parent::__construct($template_directory, $vars, $default_extension);
    }
}
