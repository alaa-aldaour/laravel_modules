<?php

namespace LaravelKit\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelKit\Modules\Contracts\RepositoryInterface;
use LaravelKit\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
