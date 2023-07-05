<?php

namespace Aerni\Fathom;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp'  => __DIR__.'/../routes/cp.php',
    ];

    public function bootAddon(): void
    {
        $this
            ->createMenu()
            ->autoPublishConfig();
    }

    protected function createMenu(): self
    {
        Nav::extend(function ($nav) {
            $nav->create('Fathom')
                ->section('Tools')
                ->route('fathom')
                ->icon('seo-search-graph');
        });

        return $this;
    }

    protected function autoPublishConfig(): self
    {
        Statamic::afterInstalled(function ($command) {
            $command->call('vendor:publish', ['--tag' => 'fathom-config']);
        });

        return $this;
    }
}
