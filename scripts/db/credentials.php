<?php
    namespace App;
    abstract class credentials{
        use system;
        private $host = "127.0.0.1";
        private $dbname = "campuslands";
        protected $username = "campus";
        private $password = "campus2023";
        function __construct(){
           
        }
    }

?>