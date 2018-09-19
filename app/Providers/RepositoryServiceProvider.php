<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected static $repositories = [
        [
            'App\Repositories\Contracts\OfficeRepository',
            'App\Repositories\Eloquents\OfficeEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\UserRepository',
            'App\Repositories\Eloquents\UserEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\CategoryRepository',
            'App\Repositories\Eloquents\CategoryEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\BookRepository',
            'App\Repositories\Eloquents\BookEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\MediaRepository',
            'App\Repositories\Eloquents\MediaEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\RoleRepository',
            'App\Repositories\Eloquents\RoleEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\RoleUserRepository',
            'App\Repositories\Eloquents\RoleUserEloquentRepository',
        ],
        [
            'App\Repositories\Contracts\BookCategoryRepository',
            'App\Repositories\Eloquents\BookCategoryEloquentRepository',
        ],
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->bind(
                $repository[0],
                $repository[1]
            );
        }
    }
}
