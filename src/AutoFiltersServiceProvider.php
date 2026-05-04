<?php

namespace PtPlugins\FilamentAutoFilters;

use Illuminate\Support\ServiceProvider;

class AutoFiltersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/auto-filters.php', 'auto-filters');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/auto-filters.php' => config_path('auto-filters.php'),
            ], 'auto-filters-config');
        }
    }
}
