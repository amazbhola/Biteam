<?php
// Normal Class.
class Student  
{
    public $name = "Karim";
    public $roll = 17;

}

// declaration class.

$studentobj =new Student;
echo $studentobj->name;
echo $studentobj->roll;

echo "<br>";
// staticclass declaration

class Teacher  
{
    public static $name = "<h1>Teacher Karim. <h1>";
    public static $Age = "<h3> Teacher Age is 55 <h3>" ;

    // use functions in class with statics

    public static function getName()
    {
        return static::$name;
    }
    public static function getAge()
    {
        return static::$Age;
    }
}

echo Teacher::getName();
echo Teacher::getAge();

