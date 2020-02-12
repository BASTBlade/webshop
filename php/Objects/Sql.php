<?php
    Class Sql{
        public $dbUsername;
        public $dbPassword;
        public $dbName;
        public $dbHost;
        
        public function __construct($Credentials){
            $this->dbUsername = $Credentials->username;
            $this->dbPassword = $Credentials->password;
            $this->dbName = $Credentials->dbname;
            $this->dbHost = $Credentials->host;
        }
    }
?>