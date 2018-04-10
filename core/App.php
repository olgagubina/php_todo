<?php

namespace App\Core;
use Couchbase\Exception;

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("Oooops, now {$key} is bound");
        };
        return static::$registry[$key];
    }
}