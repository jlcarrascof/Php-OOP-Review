<?php
include 'includes/header.php';
include 'DB.php';

// Communication between classes
class Employee {

    protected $name;
    protected $lastname;
    protected $department;
    protected $email;
    protected $code;

    public function __construct($name, $lastname, $department, $email, $code) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

    /*
        * Getters and Setters
        *
        * Getters: methods that get the value of a property
        * Setters: methods that set the value of a property
        *
        * Naming convention: getPropertyName, setPropertyName

    */

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode($code) {
        $this->code = $code;
    }

}

$john = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', 006);

$name = $john->getName();

$db = new DB($name);

var_dump($db);
