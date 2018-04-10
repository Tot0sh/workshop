<?php
class DB {
    private $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null, $dbh = null;
    private static $instance = null;
     
    private function __construct($dbDetails = array()) {
        $this->dbName = $dbDetails['db_name'];
        $this->dbHost = $dbDetails['db_host'];
        $this->dbUser = $dbDetails['db_user'];
        $this->dbPass = $dbDetails['db_pass'];

        try {
            $this->_dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
     
    public static function getInstance($dbDetails = array()) {
        if(self::$instance == null) {
            self::$instance = new DB($dbDetails);
        }
         
        return self::$instance;
    }

    public function query($sql) 
    {
        return $this->_dbh->query($sql);
    }
}