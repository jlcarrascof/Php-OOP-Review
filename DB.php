<?php
include 'includes/header.php';

class DB {

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

}
