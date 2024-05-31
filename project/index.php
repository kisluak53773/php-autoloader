<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Model\Logger;

$logger = new Logger();
$logger->log('Hello, world!');