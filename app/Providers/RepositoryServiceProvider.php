<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BaseExternalApiRepository;
use App\Interfaces\ExternalApiInterface;
use App\Repositories\TeamsRepository;
use App\Interfaces\TeamsRepositoryInterface;
use App\Repositories\GuildsRepository;
use App\Interfaces\GuildsRepositoryInterface;
use App\Repositories\UsersRepository;
use App\Interfaces\UsersRepositoryInterface;
use App\Repositories\LevelsRepository;
use App\Interfaces\LevelsRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ExternalApiInterface::class, BaseExternalApiRepository::class);
        $this->app->bind(TeamsRepositoryInterface::class, TeamsRepository::class);
        $this->app->bind(GuildsRepositoryInterface::class, GuildsRepository::class);
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
        $this->app->bind(LevelsRepositoryInterface::class, LevelsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
