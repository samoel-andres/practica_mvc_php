<?php

class Database
{
    public static function connection()
    {
        $config = Config::singleton();

        $mysqli = new mysqli($config->get('dbhost'), $config->get('dbuser'), $config->get('dbpass'), $config->get('dbname'));

        if ($mysqli->connect_errno) {
            die('Connection fail (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            return false;
        }

        return $mysqli;
    }
}
