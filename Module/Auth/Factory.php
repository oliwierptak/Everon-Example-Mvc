<?php
/**
 * This file is part of the Everon framework.
 *
 * (c) Oliwier Ptak <oliwierptak@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Everon\Module\Auth;

use Everon\Helper;
use Everon\Dependency;


class Factory extends \Everon\Factory implements Interfaces\Factory
{
    public function buildHttpSession()
    {
        die('men at work');
    }
}