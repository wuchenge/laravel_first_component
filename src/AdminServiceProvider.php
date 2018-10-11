<?php

/**
 * @Author: wuchenge
 * @Date: 2018-10-11 11:15:42
 */

namespace Wuchenge\Test;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('admin', function () {
            return new Admin;
        });
    }
}
