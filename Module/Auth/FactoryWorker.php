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
use Everon\FactoryWorker as AbstractFactoryWorker;
use Everon\Dependency;

class FactoryWorker extends AbstractFactoryWorker implements Interfaces\FactoryWorker
{
    use Dependency\Injection\Session;
    
    public function buildAuthSession()
    {
        sd($this->getSession());
    }
}