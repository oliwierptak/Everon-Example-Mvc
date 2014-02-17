<?php
/**
 * This file is part of the Everon framework.
 *
 * (c) Oliwier Ptak <oliwierptak@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Everon\Module\UserManagement;

use Everon\Interfaces\FactoryWorker;
use Everon\Module\Interfaces;
use Everon\Module\Mvc as MvcModule;

/**
 * @method FactoryWorker getFactoryWorker()
 */
class Module extends MvcModule implements Interfaces\Mvc
{
    public function init()
    {
    }
}