<?php

namespace Tanja101212\Logger;

interface ILogger {
    public function logEntry(string $line): void;
}