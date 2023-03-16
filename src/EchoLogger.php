<?php
namespace Tanja101212\Logger;

class EchoLogger implements ILogger{

    public function logEntry(string $line): void
    {
        echo '[LOG]: ' . $line . "\n";
    }
}

