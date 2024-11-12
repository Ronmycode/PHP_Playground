<?php

###################################
###### Creating clases in PHP #####
###################################

// OPTION 1 //
// Creating a Class from stdClass
/* This is a Generic php empty class to create anything */

$animal = new stdClass();
$animal -> name = "Ruby";
$animal -> type = "Dog";
var_dump($animal);


//OPTION 2
// Creating a Class from scratch
class student{
    public $name;
    public $lastName;
    public $age;
}
$student = new student();
$student -> name = "Ron";
$student -> lastName = "MyCode";
$student -> age = 50;

var_dump($student);



?>