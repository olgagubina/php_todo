<?php

class Connection
{
    public static function make($config)
    {
        try { //controlling the success of DB connection
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        };
    }
}