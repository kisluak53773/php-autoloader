<?php

declare(strict_types=1);

namespace App\Api;

interface LoggerInterface {
    public function log(string $message): void;
}