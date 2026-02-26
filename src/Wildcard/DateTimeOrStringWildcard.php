<?php

declare(strict_types=1);

namespace KigaRoo\SnapshotTesting\Wildcard;

final class DateTimeOrStringWildcard extends BaseDateTimeWildcard
{
    public function __construct(
        private string $path,
        private string $format,
        private string $pattern
    ) {
        parent::__construct($path, $format);
    }

    public function match($mixed): bool
    {
        if (preg_match($this->pattern, $mixed)) {
            return true;
        }

        return parent::match($mixed);
    }
}
