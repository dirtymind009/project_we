<?php
/**
 * Created by PhpStorm.
 * User: SHUVO
 * Date: 1/14/2015
 * Time: 10:36 PM
 */

class Database {
    private $_HOST = 'mysql13.000webhost.com';
    private $_USER = 'a3283943_root';
    private $_PASSWORD = '123456789%abc';
    private $_DBNAME= 'a3283943_profile';
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->_HOST,$this->_USER,$this->_PASSWORD,$this->_DBNAME);

        if($this->connection->connect_error)
        {
            echo "Error";
            exit;
        }
        echo "Connected Successfully";
    }
}