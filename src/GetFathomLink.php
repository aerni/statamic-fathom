<?php

namespace Aerni\Fathom;

class GetFathomLink
{
    public static function handle(): ?string
    {
        return config('fathom.link');
    }
}
