<?php
#####################################
######## control structures #########
#####################################

//Conditionals = if-else, if-elseif, switch
//loops = for, while, do while

function endingNumber($num){
    if($num % 10 === 4){

        echo "Number DOESN'T ends with a 4 digit"; 
    }else{
        echo "Number DOES ends with a 4 digit";
    }
}

endingNumber(1234);





























###################################
###### Creating clases in PHP #####
###################################

// OPTION 1 //
// Creating a Class from stdClass
/* This is a Generic php empty class to create anything */

$animal = new stdClass();
$animal -> name = "Ruby";
$animal -> type = "Dog";
echo("<br>");
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
echo("<br>");
var_dump($student);



?>