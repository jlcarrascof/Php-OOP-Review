<?php
include 'includes/header.php';


// Attributes of the Employee class
class Employee {
    public $name;
    public $lastname;
    public $department;
    public $email;
    public $code;
}

$employee = new Employee();

echo '<pre>';
var_dump($employee);
echo '</pre>';
