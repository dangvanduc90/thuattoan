<?php


class Legit
{
    protected static $_system_registry = [];

    /**
     *
     * @param string $key
     * @return mixed
     */
    public static function systemRegistry(string $key)
    {
        if (!isset(static::$_system_registry[$key])) {
            return null;
        }

        return static::$_system_registry[$key];
    }

    public static function systemRegister()
    {
        $num_args = func_num_args();

        if ($num_args == 2) {
            $key = func_get_arg(0);

            if (!is_string($key) && !is_int($key)) {
                return;
            }

            $data = array($key => func_get_arg(1));
        } else {
            return null;
        }

        foreach ($data as $key => $value) {
            static::$_system_registry[$key] = $value;
        }
    }

    public static function initialize() {
        if (file_exists(dirname(__FILE__) . '/register.php')) {
            include dirname(__FILE__) . '/register.php';
        }
    }
}