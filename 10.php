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
}

class Provider {
    protected $name;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $enterprise;
}
