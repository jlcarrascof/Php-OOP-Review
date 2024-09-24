<?php
include 'includes/header.php';

// Static methods and properties
class Employee {

    // Public: can be accessed from everywhere
    // Private: can only be accessed from within the class
    // Protected: can only be accessed from within the class and its subclasses

    protected static $name;
    public $lastname;
    public $department;
    public $email;
    public $code;

    public function __construct($name, $lastname, $department, $email, $code) {
        self::$name = $name;
        $this->lastname = $lastname;
        $this->department = $department;
        $this->email = $email;
        $this->code = $code;
    }

    public function getName() {
        return $this->name;
    }

    public function changeName($name) {
        $this->name = $name;
    }

    public static function getEmployees() {
        echo "Echo from the static method";
    }
}

Employee::getEmployees();

$john = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', 006);

echo '<pre>';
var_dump($john);
echo '</pre>';
