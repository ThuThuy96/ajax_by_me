<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/12/2018
 * Time: 15:05
 */
class Database {

    public static $connection = null;

    /**
     * $db = new Database();
     * Database constructor.
     */
    public function __construct()
    {
        /**
         * Lan chay thu 2
         */
        if(self::$connection){
            return self::$connection;
        }

        $this->connect();

        return self::$connection;

    }

    public function connect() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "ajax_by_me";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }

    }

    public function disconnect() {
        self::$connection->close();
    }

}