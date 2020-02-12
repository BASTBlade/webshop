<?php
    Class User{

        //Personal Details
        public $Username;
        public $Email;
        public $Permission;
        public $Password;

        //Contact Information
        public $Phone;
        public $Postal;
        public $Street;
        public $Number;
        public $Additional_residence;

        //Billing Details
        public $BillingDetails;

        public function __construct($username,$email,$permission,$password){
            $this->Username = $username;
            $this->Email = $email;
            $this->Permission = $permission;
            $this->Password = $password;
        }
    }
?>