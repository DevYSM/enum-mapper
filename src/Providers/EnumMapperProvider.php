<?php

namespace Devysm\EnumMapper\Providers;

use Devysm\EnumMapper\EnumMapper;
use Illuminate\Support\ServiceProvider;

class EnumMapperProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            EnumMapper::class
        );
    }
}
