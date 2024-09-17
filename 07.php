<?php
include 'includes/header.php';

// Methods
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

    public function employeeName()
    {
        echo "Showing employee name";
    }
}

$john = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', 006);
$tatiana = new Employee('Tatiana', 'Doe', 'MKT', 'tatiana@me.com', 007);


echo '<pre>';
var_dump($john);
echo '</pre>';

echo '<pre>';
var_dump($tatiana);
echo '</pre>';
