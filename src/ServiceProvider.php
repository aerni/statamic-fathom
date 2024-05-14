<?php

namespace Aerni\Fathom;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp'  => __DIR__.'/../routes/cp.php',
    ];

    public function bootAddon(): void
    {
        Nav::extend(function ($nav) {
            $nav->create('Fathom')
                ->section('Tools')
                ->route('fathom')
                ->icon('seo-search-graph');
        });
    }
}
