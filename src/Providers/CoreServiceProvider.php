<?php

namespace OctopusOsc\Core\Providers;

use Illuminate\Support\ServiceProvider;
use OctopusOsc\Core\Commands\ModuleListCommand;
use OctopusOsc\Core\Commands\ModuleSetupCommand;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $config_path = config_path();
        $path = $config_path . "/module.php";
        if (!file_exists($path)) {
            $content = file_get_contents(__DIR__ . "/../Templates/module.php.template");
            $fp = fopen($path,"wb");
            fwrite($fp,$content);
            fclose($fp);
        }
        $this->mergeConfigFrom($config_path . "/module.php", 'module');
    }

    public function register()
    {
////        dd(__DIR__ . "/../../routes/web.php");
//        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
//        $this->loadViewsFrom(__DIR__ . "/../resources/views", "botble-demo");

        $this->commands([
            ModuleListCommand::class,
            ModuleSetupCommand::class
        ]);
    }
}
