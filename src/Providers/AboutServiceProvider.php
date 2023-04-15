<?php

namespace alirezaabdolmaleki\about\Providers;

use Illuminate\Support\ServiceProvider;

class AboutServiceProvider extends ServiceProvider{

    public function boot(): void
    {
        $this->loadRoutesFrom( __DIR__.'/../routes/web.php');
    }
}
