<?php
namespace smd;
use mysqli;

class Database
{
    const SERVERNAME = 'localhost',
        USERNAME = 'root',
        PASSWORD = 'root',
        DBNAME = 'support my day';
    static $conn;

    public static function getConnection()
    {
        if (!isset($conn)) $conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
        return $conn;
    }
}