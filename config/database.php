<?php

use PDO;

class Database {

    private static $database;

    public static function createPDO() {
        $path = "mysql:host=" . Config::$servidor . ";dbname=" . Config::$banco;
        self::$database = new PDO($path, Config::$usuario, Config::$senha);
        return self::$database;
    }

}
