<?php
/**
 * Everon application example.
 */
namespace Everon;

$system_memory = (string) (memory_get_usage(true));
error_reporting(E_ALL);

/**
 * @var RequestIdentifier $REQUEST_IDENTIFIER
 * @var Interfaces\Factory $Factory
 * @var Interfaces\Core $Application
 */
require_once(
    implode(DIRECTORY_SEPARATOR,
        [dirname(__FILE__), '..', 'Config', 'Bootstrap', 'mvc.php']));

$REQUEST_IDENTIFIER->setSystemMemoryAtStart($system_memory);
$Application = $Factory->buildMvc();
$Application->run($REQUEST_IDENTIFIER);