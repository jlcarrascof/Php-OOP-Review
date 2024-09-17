<?php
include 'includes/header.php';

// Access modifiers: public, private, protected
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

}

$john = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', 006);

echo $john->name;

echo '<pre>';
var_dump($john);
echo '</pre>';
