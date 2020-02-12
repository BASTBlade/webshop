<?php
    include_once dirname(__DIR__) . '..\Objects\User.php';

    Class UserManager{
        public $user;
        public function __construct(){
            $this->user = new User("test1","test2","test3","test4");
        }
    }
?>