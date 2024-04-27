<?php

class Config
{
    private static $instance;
    private $variables = array();

    public function __construct()
    {
        $this->variables = [
            'dbhost' => 'localhost',
            'dbuser' => 'root',
            'dbpass' => 'root',
            'dbname' => 'practica_mvc_php',
            'controllers' => 'controller/',
            'models' => 'model/',
            'views' => 'resources/views/'
        ];
    }

    public function get($key)
    {
        return $this->variables[$key];
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
}
