<?php
/**
 * Created by PhpStorm.
 * User: dangvanduc90
 * Date: 12/12/2018
 * Time: 22:54
 */

namespace Database;

class DatabaseManager
{
    private static $singletonObj = null;

    private function __construct()
    {
    }

    public static function createSingletonObject() {
        if (self::$singletonObj != null) {
            return self::$singletonObj;
        }
        self::$singletonObj = new self();
        return self::$singletonObj;
    }
}