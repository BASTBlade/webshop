<?php
    // Includes
    include_once 'Managers/SqlManager.php';
    include_once 'Managers/UserManager.php';
    include_once 'Managers/PermissionManager.php';
    include_once 'Managers/ProductManager.php';
    include_once 'Managers/CategoryManager.php';
    include_once 'Managers/ActiesManager.php';
    include_once 'Managers/CartManager.php';

    Class Core{
        // Core Elements
        public $SqlManager;
        public $UserManager;
        public $PermissionManager;

        // WebShop Elements
        public $ProductManager;
        public $CategoryManager;
        public $ActiesManager;
        public $CartManager;

        public function __construct(){
            $this->SqlManager = new SqlManager();
            $this->UserManager = new UserManager();
            $this->PermissionManager = new PermissionManager();
            $this->ProductManager = new ProductManager();
            $this->CategoryManager = new CategoryManager();
            $this->ActiesManager = new ActiesManager();
            $this->CartManager = new CartManager();
        }
    }

    $Core = new Core;
?>