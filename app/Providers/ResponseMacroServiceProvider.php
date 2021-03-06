<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('csv', function ($value) {
            return Response::make(implode(',', $value));
        });

        Response::macro('psv', function ($value) {
            return Response::make(implode('|', $value));
        });
    }
}
