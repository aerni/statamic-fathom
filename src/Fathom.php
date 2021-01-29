<?php

namespace Aerni\Fathom;

use Aerni\Fathom\Exceptions\FathomException;

class Fathom
{
    public static function link(): string
    {
        throw_if(is_null(config('fathom.link')), new FathomException('A link has not been defined in your fathom config file'));

        return config('fathom.link');
    }
}
