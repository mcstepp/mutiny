<?php

namespace App\Providers;

use App\BBCodeParser;
use PheRum\BBCode\BBCodeServiceProvider as VendorBBCodeServiceProvider;


class BBCodeServiceProvider extends VendorBBCodeServiceProvider
{

    public function register()
    {
        $this->app->bind('laravel-bbcode', function () {
            return new BBCodeParser;
        });
    }
}