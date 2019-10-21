<?php


class Database extends \Medoo\Medoo
{

    public static $instance;

    public function __construct()
    {
        parent::__construct([
            'database_type' => 'mysql',
            'database_name' => 'exam',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
    }

    static function instance() {
        if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }
}
