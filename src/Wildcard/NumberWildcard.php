<?php

declare(strict_types=1);

namespace KigaRoo\SnapshotTesting\Wildcard;

final class NumberWildcard implements Wildcard
{
    public function __construct(
        private string $path
    ) { }

    public function atPath(): string
    {
        return $this->path;
    }

    public function match($mixed): bool
    {
        return is_numeric($mixed);
    }
}
