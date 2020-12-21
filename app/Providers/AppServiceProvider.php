<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
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
        //
        Voyager::addAction(\App\Actions\Blocks::class);
        Voyager::addAction(\App\Actions\BlockEdit::class);
        Voyager::addAction(\App\Actions\Block::class);
    }
}
