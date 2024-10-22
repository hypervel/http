<?php

declare(strict_types=1);

namespace SwooleTW\Hyperf\Http\Exceptions;

class FileNotFoundException extends FileException
{
    public function __construct(string $path)
    {
        parent::__construct(
            sprintf('The file "%s" does not exist', $path)
        );
    }
}
