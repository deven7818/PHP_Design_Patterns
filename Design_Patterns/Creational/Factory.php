<?php

/**
 * Program for Factory Design Problem
 */
class Student
{
    private $studentName;
    private $registration;

    public function __construct($name, $number)
    {
        $this->studentName = $name;
        $this->registration = $number;
    }

    /**
     * Function to print the Student Details
    */
    public function getStudentDetails()
    {
        echo "Student Name:: " . $this->studentName;
        echo "\nRegistration Number:: " . $this->registration;
    }
}
class University
{
    /**
     * Function to Create object of student class
     * Passing Name and Number as parameters
     * Returns the object of student class
     */
    public static function createObject($name, $number)
    {
        return new Student($name, $number);
    }
}

$university = University::createObject("Nilesh Patil", 25469807);
$university->getStudentDetails();
?>