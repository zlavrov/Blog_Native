<?php

namespace App\Model;

use PDO;
use PDOException;
use PDOStatement;
use App\Config\DataBaseConfig;

class DBActionModel {

    public function connection() {

        $config = (new DataBaseConfig)->getConfig();
        return new PDO("mysql:host=" . $config['host'] . ":" . $config['port'] . ";dbname=" . $config['base'], $config['user'], $config['pass']);
    }

    public function SelectUserFromDataBase($username, $password) {

        try {
            $conn = $this->connection();
            $sql = "SELECT * FROM User WHERE username = '" . $username . "'";            
            $result = $conn->query($sql);
            return $result;
        }
        catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }

    public function SaveNewUserToDataBase($username, $password) {

        try {
            $conn = $this->connection();
            $sql = "INSERT INTO User (username, password, createAt) VALUES ('" . $username . "', '" . $password . "', '" . date("Y-m-d H:i:s") . "')";            
            $result = $conn->exec($sql);
            return $result;
        }
        catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }

    public function checkDataBaseConnect() {

        try {
            $config = (new DataBaseConfig)->getConfig();
            $conn = new PDO("mysql:host=" . $config['host'] . ":" . $config['port'] . ";", $config['user'], $config['pass']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return ['status' => true];
        }
        catch (PDOException $e) {
            switch($e->getCode()) {
                case "2002":
                    $message = "Wrong host or wrong port specified in database configuration.";
                    break;
                case "1045":
                    $message = "Wrong user or wrong password specified in database configuration.";
                    break;
            }
            return ['status' => false, 'message' => $message];
        }
    }
}
