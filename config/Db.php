<?php


class Db
{

    public static function getConnection()
    {
//        $paramsPath = ROOT . '/config/db_params.php';
//        $params = include($paramsPath);
//
//        $dsn = "mysql:host={localhost};dbname={metro}";
//        $db = new PDO($dsn, 'root', '');
//
//        return $db;
        $host = 'localhost';
        $db   = 'metro';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        return $pdo;
    }
}