<?php

    class DB {
        private static $instance = NULL;

        public static function createInstance() {
            if(!isset(self::$instance)) {
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host=localhost;dbname=employees', 'root', '040319659', $optionsPDO);
            }
            return self::$instance;
        }
    }

?>