<?php

namespace App\Providers;

use App\Models\Configuration;
use App\Models\Election;
use App\Models\MediaLibraries;
use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        Paginator::useBootstrap();

        $response['configuration'] = Configuration::first();
        $response['services'] = Service::paginate(4);
        view()->share($response);


    }
}
