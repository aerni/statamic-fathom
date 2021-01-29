<?php

namespace Aerni\Fathom\Http\Controller;

use Aerni\Fathom\Fathom;

class FathomController
{
    public function __invoke()
    {
        return redirect(Fathom::link());
    }
}
