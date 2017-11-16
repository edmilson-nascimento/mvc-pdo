<?php

class Database {

    private $host     = 'localhost';
    private $username = 'root';
    private $password = '1234';
    private $database = 'conta';
    private $conn;

    public function __construct() {
        
        try {
            
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $this->setConn($conn);
            
        } catch (PDOException $e) {
            // echo 'ERROR: ' . $e->getMessage();
        }
        
    }

    public function disconnect() {
        $this->setConn(NULL);
    }

    public function getConn() {
        return $this->conn;
    }

    public function setConn($conn) {
        $this->conn = $conn;
    }

    
    
    
}

