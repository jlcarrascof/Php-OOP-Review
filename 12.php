<?php
include 'includes/header.php';

// Static methods and properties
class Employee {

    // Public: can be accessed from everywhere
    // Private: can only be accessed from within the class
    // Protected: can only be accessed from within the class and its subclasses

    protected $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

    public function __construct($name, $lastname, $department, $email, $code) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

    public function getName() {
        return $this->name;
    }

    public function changeName($name) {
        $this->name = $name;
    }

    public static function getEmployees() {
        echo "Echo from the static method";
    }
}

Employee::getEmployees();
