<?php

declare(strict_types=1);

namespace KigaRoo\SnapshotTesting\Driver;

use KigaRoo\SnapshotTesting\Driver;
use PHPUnit\Framework\Assert;

class TextDriver implements Driver
{
    public function serialize(string $text): string
    {
        return $text.PHP_EOL;
    }

    public function extension(): string
    {
        return 'txt';
    }

    /**
     * @param Wildcard[] $wildcards
     */
    public function match(string $expected, string $actual, array $wildcards = []): void
    {
        $actual = $this->serialize($actual);

        Assert::assertEquals($expected, $actual);
    }
}
