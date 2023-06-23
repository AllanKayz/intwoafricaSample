<?php

require 'vendor/autoload.php';

use AllanKayz\Intwoafrica\Connection as Connection;

try {
    Connection::get()->connect();
    echo 'A connection to the database server has been established successfully.';
} catch (\PDOException $e) {
    echo ($e->getMessage());
}