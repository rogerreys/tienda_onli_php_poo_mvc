<?php

class Database{
    public static function connect() {
        $host="localhost";
        $username="root";
        $password="root";
        $dbname="tienda_master";
        $port = 3306;
        $db = new mysqli($host, $username, $password, $dbname, $port);
        $db->query("SET NAMES 'UTF-8'");
        return $db;
    }
}