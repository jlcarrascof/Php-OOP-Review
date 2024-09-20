<?php
include 'includes/header.php';

// Getters and Setters
class Employee {

    // Public: can be accessed from everywhere
    // Private: can only be accessed from within the class
    // Protected: can only be accessed from within the class and its subclasses

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

$john->setCode('2030');
echo $john->getCode().'-';
echo $john->getName().'-';
