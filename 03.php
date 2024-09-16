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
$employee->name = 'John';
$employee->lastname = 'Doe';

echo '<pre>';
var_dump($employee);
echo '</pre>';

$employee2 = new Employee();
$employee2->name = 'Jane';
$employee2->lastname = 'Doe';

echo '<pre>';
var_dump($employee2);
echo '</pre>';
