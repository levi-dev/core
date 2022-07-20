<?php
namespace OctopusOsc\Core\Config;

class Modules
{
    const MODULE = 'module';
    const LIBRARY = 'library';
    const THEME = 'theme';
    const LANGUAGE = 'language';
    const SETUP = 'setup';

    private static $module = [
        self::MODULE => [],
        self::LIBRARY => [],
        self::LANGUAGE => [],
        self::THEME => [],
        self::SETUP => []
    ];

    public static function register($type, $componentName, $path)
    {
//        self::validateType($type);
        if (isset(self::$module[$type][$componentName])) {
//            throw new \LogicException(
//                ucfirst($type) . ' \'' . $componentName . '\' from \'' . $path . '\' '
//                . 'has been already defined in \'' . self::$module[$type][$componentName] . '\'.'
//            );
        } else {
            self::$module[$type][$componentName] = str_replace('\\', '/', $path);
        }
    }

    public static function getModules(){
        return self::$module[self::MODULE];
    }
}
