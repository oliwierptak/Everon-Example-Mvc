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

class FactoryWorker extends AbstractFactoryWorker implements Interfaces\FactoryWorker
{
    /**
     * @var Interfaces\Collection
     */
    protected $MethodCollection = null;
    
 
    public function __construct()
    {
        $this->MethodCollection = new Helper\Collection(
            array_flip(
                get_class_methods(
                    get_class($this)
                )
            )
        );    
    }
    
    public function buildAuthSession()
    {
        
    }
}