<?php
include dirname(__FILE__) . '/debug.php';

class Voz
{
    public static function core($core, $instance = 'singleton')
    {
        return static::obj(static::getObjClassName('core:' . $core), $instance);
    }

    private static function getObjClassName(string $obj_name)
    {
        $obj_name = explode(':', $obj_name);
        if (count($obj_name) != 2) {
            static::core('debug')->triggerError('Obj name [' . implode(':', $obj_name) . '] is incorrect');
        }

        if ($obj_name[0] == 'core') {
            return 'Voz_' . $obj_name[1];
        }
        static::core('debug')->triggerError('Obj name [' . implode(':', $obj_name) . '] is incorrect');
    }

    private static function obj(string $class, $instance = null, $params = null)
    {
        static $instances = [];
        if (!class_exists($class, false)) {
            $debug = new Debug();
            $debug->triggerError('Class ' . $class . ' not found');
        }
        $class_name = $class . '.' . $instance;
        if (array_key_exists($class_name, $instances)) {
            $object = $instances[$class_name];
        } else {
            $object = new $class($params);
            $instances[$class . '.' . $instance] = $object;
        }
        return $object;
    }

    public static function initialize() {
        spl_autoload_register(['Voz', 'load']);
    }


    public static function load($class_name) {
        if (class_exists($class_name, false)) {
            return true;
        }

        $class_file_path = static::getFilePathByClassName($class_name);

        return $class_file_path && static::import($class_file_path);
    }

    private static function import($paths)
    {
        $failed = 0;
        if (!is_array($paths)) {
            $paths = [$paths];
        }

        foreach ($paths as $path) {
            $lower_path = strtolower($path);

            if (file_exists($path)) {
                $loaded[$lower_path] = include $path;
            } else {
                ++$failed;
            }
        }
        return $failed < 1;
    }

    private static function getFilePathByClassName(string $class_name)
    {
        $class_name = explode('_', $class_name);
        if (count($class_name) !== 2) {
            return $class_name;
        }
        $dir = '';
        switch (strtolower($class_name[0])) {
            case 'voz':
                $dir = 'core/';
                break;
            default:
                break;
        }
        return $dir . strtolower($class_name[1]) . '.php';
    }
}