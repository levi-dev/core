<?php
namespace OctopusOsc\Core\Commands;
use Illuminate\Console\Command;

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
        $modules = [
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ],
          [
              "name" => "Module Name",
              "status" => true
          ]
        ];
        $this->line(str_pad("Module Name", self::COLSPAN_1) . "|".str_pad("Status", self::COLSPAN_2). "|");
        $this->line(str_pad("", self::COLSPAN_1, "-") . "|".str_pad("", self::COLSPAN_2, "-"). "|");
        foreach ($modules as $module){
            $this->line(str_pad($module["name"], self::COLSPAN_1) . "|".str_pad($module["status"] ? "Enable" : "Disable", self::COLSPAN_2). "|");
        }
    }
}
