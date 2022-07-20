<?php
namespace OctopusOsc\Core\Commands;
use Illuminate\Console\Command;
use OctopusOsc\Core\Config\Modules;

class ModuleSetupCommand extends Command
{
    const COLSPAN_1= 30;
    const COLSPAN_2= 20;
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'module:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List the modules.';

    /**
     * Execute the console command.
     */
    public function handle(){
        $configModules = config('module.modules');
        $modulesActive = Modules::getModules();
        $modulesKey = array_keys($modulesActive);
        $newModules = array_fill_keys($modulesKey, true);
        foreach ($newModules as $key => $value){
            $newModules[$key] = array_key_exists($key,$configModules) ? $configModules[$key] : $value;
        }
        return;
    }
}
