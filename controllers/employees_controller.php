<?php

    include_once("models/employee.php");
    include_once("connection.php");

    DB::createInstance();

    class EmployeesController {
        public function beginning() {
            $employees = Employee::consult();
            require_once("views/employees/beginning.php");
        }

        public function create() {
            if($_POST) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                Employee::create($name, $email);
                header("Location:./?controller=employees&action=beginning");
            }
            require_once("views/employees/create.php");
        } 

        public function edit() {
            if($_POST) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                Employee::edit($id, $name, $email);
                header("Location:./?controller=employees&action=beginning");
            }
            $id = $_GET['id'];
            $employee=(Employee::find($id));
            require_once("views/employees/edit.php");
        }

        public function delete() {
            $id = $_GET['id'];
            Employee::delete($id);
            header("Location:./?controller=employees&action=beginning");
        }
    }

?>