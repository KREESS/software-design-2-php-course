<?php

class BaseInstance
{
    protected static $instance;

    protected function __construct()
    {
        // Konstruktor di sini hanya didefinisikan untuk mencegah instansiasi langsung
    }

    public static function getInstance(): self
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
