<?php

/**
 * Program for Singleton Design Problem
 */
class Student
{
    private static $student = null;
    private function __construct()
    {
        echo "calling Constructor.";
    }

    public static function createObject()
    {
        
        if (self::$student == null) {
            self::$student = new Student();
        }
        return self::$student;
    }
}

$student1 = Student::createObject();
$student2 = Student::createObject();
$student3 = Student::createObject();
$student4 = Student::createObject();
$student5 = new Student();
?>