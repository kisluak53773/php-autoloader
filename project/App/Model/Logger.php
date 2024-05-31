<?php

declare(strict_types=1);

namespace App\Model;

use App\Api\LoggerInterface;

class Logger implements LoggerInterface 
{
    public function log(string $message): void 
    {
        echo "Logging: $message\n";
    }
}