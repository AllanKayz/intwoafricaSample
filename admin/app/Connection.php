<?php

namespace Allankayz\Intwoafrica;

/**
 * Represent the Connection
 */

class Connection
{
    /**
     * Connection
     * @var type
     */

    private static $conn;

    /**
     * Connect to the database and return an instance of \PDO object
     * @return \PDO
     * @throws \Exception
     */
    public function connect()
    {

        //read parameters in the ini configuration file
        $params = parse_ini_file('config/database.ini');
        if ($params === false) {
            throw new \Exception("Error reading database configuration file");
        }

        //connect to the database
        $conStr = sprintf(
            "mysql:host=%s;dbname=%s;user=%s;password=%s",
            $params['host'],
            $params['database'],
            $params['user'],
            $params['password']
        );

        $pdo = new \PDO($conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function get()
    {
        if (null === static::$conn) {
            static::$conn = new static();
        }

        return static::$conn;
    }

    protected function _construct()
    {

    }

    protected function _clone()
    {

    }

    protected function _wakeup()
    {

    }
}

?>