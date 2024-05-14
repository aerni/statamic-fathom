<?php

namespace Aerni\Fathom;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    public function bootAddon(): void
    {
        if (! $url = config('fathom.link')) {
            return;
        }

        Nav::extend(fn ($nav) =>
            $nav->create('Fathom')
                ->section('Tools')
                ->url($url)
                ->icon('seo-search-graph')
        );
    }
}
