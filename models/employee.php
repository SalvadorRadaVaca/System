<?php

    class Employee {

        public $id;
        public $name;
        public $email;

        public function __construct($id, $name, $email) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
        }

        public static function consult() {
            $employeesList = [];
            $connectionDB = DB::createInstance();
            $sql = $connectionDB->query("SELECT * FROM employees");

            foreach($sql->fetchAll() as $employee) {
                $employeesList[] = new Employee($employee['id'], $employee['name'], $employee['email']);
            }
            return $employeesList;
        }

        public static function create($name, $email) {
            $connectionDB = DB::createInstance(); 
            $sql = $connectionDB->prepare("INSERT INTO employees (name, email) VALUE (?, ?)");
            $sql->execute(array($name, $email));
        }

        public static function delete($id) {
            $connectionDB = DB::createInstance();
            $sql = $connectionDB->prepare("DELETE FROM employees WHERE id=?");
            $sql->execute(array($id));
        }

        public static function find($id) {
            $connectionDB = DB::createInstance();
            $sql = $connectionDB->prepare("SELECT * FROM employees WHERE id = ?");
            $sql->execute(array($id));
            $employee = $sql->fetch();
            return new Employee($employee['id'], $employee['name'], $employee['email']);
        }

        public static function edit($id, $name, $email) {
            $connectionDB = DB::createInstance(); 
            $sql = $connectionDB->prepare("UPDATE employees SET name = ?, email = ? WHERE id = ?");
            $sql->execute(array($name, $email, $id));
        } 
    }

?>