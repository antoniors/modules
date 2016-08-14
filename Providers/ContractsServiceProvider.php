<?php

namespace Herosoft\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(
            'Herosoft\Modules\Contracts\RepositoryInterface',
            'Herosoft\Modules\Repository'
        );
    }
}
