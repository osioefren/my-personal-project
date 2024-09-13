<?php
namespace App;

use App;
use Dotenv\Dotenv;
use PDO;
require __DIR__ . '/../../vendor/autoload.php';

class Database {
    private $servername;
    private $username;
    private $dbname;
    private $password;
    private $errorHandler;

    function __construct() {
        $info = $this->getInfo();
        $this->setInfo(
            $info['servername'], 
            $info['username'], 
            $info['dbname'], 
            $info['password']
        );

        $this->errorHandler = new ErrorHandler();

        try {
            $conn =  new PDO("mysql:host={$this->servername}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE DATABASE IF NOT EXISTS {$this->dbname}";
            $conn->exec($sql);
            echo "Database connection successful";

        } catch (PDOException $e) {
            $this->errorHandler->customErrorHandler(
                $e->getCode(),
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            );
            die("Database connection failed.");
        }
    }

    private function getInfo() {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
        $dotenv->load();

        if (!isset($_ENV['DB_SERVERNAME'])) {
            echo ".env file not loaded properly";
        } else {
            echo ".env file loaded correctly";
        }
        
        return [
            'servername' => $_ENV['DB_SERVERNAME'] ?: '',
            'username' => $_ENV['DB_USERNAME'] ?: '',
            'dbname' => $_ENV['DB_DBNAME'] ?: '',
            'password' => $_ENV['DB_PASSWORD'] ?: ''
        ];
    }

    private function setInfo($servername, $username, $dbname, $password) {
        $this->servername = $servername;
        $this->username = $username;
        $this->dbname = $dbname;
        $this->password = $password;
    }

    function createTable() {
        try {
            $conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
                fullname VARCHAR(255) NOT NULL,
                username VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL,
                date_updated TIMESTAMP
            )";

            $conn->exec($sql);
            echo "Table 'users' created successfully";

        } catch (PDOException $e) {
            $this->errorHandler->customErrorHandler(
                $e->getCode(),
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            );
            die("Table creation failed.");
        } finally {
            $conn = null;
        }
    }

}

$test = new Database();
$test->createTable();