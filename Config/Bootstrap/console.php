<?php
namespace Everon;

$nesting = implode('..', array_fill(0, 3, DIRECTORY_SEPARATOR));
$EVERON_ROOT =  realpath(dirname(__FILE__).$nesting).DIRECTORY_SEPARATOR;
$EVERON_SOURCE_ROOT = implode(DIRECTORY_SEPARATOR, [dirname(__FILE__), '..', '..', 'vendor', 'everon', 'everon', 'src', 'Everon']).DIRECTORY_SEPARATOR;

require_once(
implode(DIRECTORY_SEPARATOR,
    [$EVERON_SOURCE_ROOT, 'Config', 'Bootstrap.php'])
);

/**
 * @var Bootstrap $Bootstrap
 * @var Interfaces\Environment $Environment
 * @var Interfaces\DependencyContainer $Container
 * @var Interfaces\Factory $Factory
 */
