<?php
include 'includes/header.php';

// Constructor Property Promotion
class Employee {
    public function __construct(
        public $name,
        public $lastname,
        public $department,
        public $email,
        public $code,
    ) {

    }
}

$john = new Employee('John', 'Doe', 'IT', 'jdoe@me.com', '006');
$tatiana = new Employee('Tatiana', 'Doe', 'MKT', 'tatiana@me.com', '007');


echo '<pre>';
var_dump($john);
echo '</pre>';

echo '<pre>';
var_dump($tatiana);
echo '</pre>';
