<?php

namespace OctopusOsc\Core\Providers;

use Illuminate\Support\ServiceProvider;
use OctopusOsc\Core\Commands\ModuleListCommand;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
////        dd(__DIR__ . "/../../routes/web.php");
//        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
//        $this->loadViewsFrom(__DIR__ . "/../resources/views", "botble-demo");

        $this->commands([
            ModuleListCommand::class
        ]);
    }
}
