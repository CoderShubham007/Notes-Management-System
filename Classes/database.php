<?php
    class Database {
        private $DB_SERVERNAME = "localhost";
        private $DB_NAME = "mynotes";
        private $DB_USERNAME = "root";
        private $DB_PASSWORD = "";

        protected $connection;

        protected function __construct() {
            $this->connection = new PDO("mysql:host=$this->DB_SERVERNAME;dbname=$this->DB_NAME", $this->DB_USERNAME, $this->DB_PASSWORD);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function check_connection() {
            try {
                $this->connection = new PDO("mysql:host=$this->DB_SERVERNAME;dbname=$this->DB_NAME", $this->DB_USERNAME, $this->DB_PASSWORD);
                // set the PDO error mode to exception
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return true;
            } catch(PDOException $e) {
                return false;
            }
        }
    }
?>