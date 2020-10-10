<?php

namespace App\Providers;

// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
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

        Schema::defaultStringLength(191);

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // \DB::listen(function ($query) {
        //     Log::info(
        //         $query->sql,
        //         $query->bindings,
        //         $query->time
        //     );
        // });

        // \DB::listen(function ($sql) {
        //     error_log($sql->sql);
            // Log::info($sql->sql);
            // Log::error($sql->sql);
            // Log::warning($sql->sql);
            // var_dump($sql->sql);
        // });

        // error_log('asfdsf');
        // Event::listen('illuminate.query', function ($query) {
        //     error_log($query);
        // });

        // $output = new Symfony\Component\Console\Output\ConsoleOutput();
        // $output->writeln("<info>Error message</info>");
    }
}
