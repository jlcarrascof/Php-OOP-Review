<?php
include 'includes/header.php';

// Constructors
class Employee {
    public $name;
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
}

$employee = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', '1234');

echo '<pre>';
var_dump($employee);
echo '</pre>';
