<?php
namespace App\Model;

use App\Api\LoggerInterface;

class Logger implements LoggerInterface {
    public function log($message) {
        echo "Logging: $message\n";
    }
}
