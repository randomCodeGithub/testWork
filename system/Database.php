<?php


class Database
{

    public static function getConnection()
    {
        $paramsPath = './config/dbParams.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};port={$params['port']}";

        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}
