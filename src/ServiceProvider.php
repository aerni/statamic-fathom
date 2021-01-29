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

    public function boot()
    {
        parent::boot();

        $this->createMenu();

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'fathom');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('fathom.php'),
            ], 'fathom-config');
        }

        $this->publishConfigFile();
    }

    private function createMenu(): void
    {
        Nav::extend(function ($nav) {
            $nav->create('Fathom')
                ->section('Tools')
                ->route('fathom')
                ->icon('seo-search-graph');
        });
    }

    private function publishConfigFile()
    {
        Statamic::afterInstalled(function ($command) {
            $command->call('vendor:publish', ['--tag' => 'fathom-config',]);
        });
    }
}
