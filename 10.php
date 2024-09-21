<?php
include 'includes/header.php';

// Inheritance
class Employee {
    protected $name;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $code;
    protected $department;

    public function __construct($name, $lastname, $email, $phone, $code, $department) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->code = $code;
        $this->department = $department;
    }

    public function showInformation() {
        echo "Name: " . $this->name . ' ' . $this->lastname . ' Email: ' . $this->email;
    }
}

class Provider {
    protected $name;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $enterprise;

    public function __construct($name, $lastname, $email, $phone, $enterprise) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->enterprise = $enterprise;
    }
}

$employee = new Employee('John', 'Doe', 'johnny.doe@mail.com', '123456789', '1234', 'IT');
$provider = new Provider('Jane', 'Doe', 'jane.doe@mail.com', '987654321', 'Doe Enterprise');

echo '<pre>';
var_dump($employee);
echo '</pre>';

echo '<pre>';
var_dump($provider);
echo '</pre>';

$employee->showInformation();
