<?php
include 'includes/header.php';

// Constructors
class Employee {
    public $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

    public function __construct() {
        echo 'Hello World!';
    }
}

$employee = new Employee();


echo '<pre>';
var_dump($employee);
echo '</pre>';
