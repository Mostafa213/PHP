<?php
class DB {
    private static $instance = null;
    private $mysqli;
  
    private function __construct() {
      $host = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'applicant_abm';
      $this->mysqli = new mysqli($host, $username, $password, $database);
      if ($this->mysqli->connect_error) {
        die("Connection failed: " . $this->mysqli->connect_error);
      }
    }
  
    public static function getInstance() {
      if (self::$instance == null) {
        self::$instance = new DB();
      }
      return self::$instance;
    }
  
    public function query($query) {
      $result = $this->mysqli->query($query);
      return $result;
    }
  }