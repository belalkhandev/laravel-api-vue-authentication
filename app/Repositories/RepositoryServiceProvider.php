<?php
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {
    public function register()
    {
        // test
        $this->app->bind(
            'App\Repositories\TestInterface',
            'App\Repositories\TestRepository'
        );

        // category
        $this->app->bind(
            'App\Repositories\CategoryInterface',
            'App\Repositories\CategoryRepository'
        );
    }
}