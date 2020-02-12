<?php
    include_once dirname(__DIR__) . '..\Objects\Sql.php';
    include_once dirname(__DIR__) . '..\..\gitignore\Credentials.php';

    Class SqlManager{
        public $Sql;

        public function __construct(){
            $this->Sql = new Sql(new Credentials());
        }
    }
?>