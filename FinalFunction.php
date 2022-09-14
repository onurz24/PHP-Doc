<?php

/* Final Just means we cannot override this Function, 
    without Final Keyword we would when we extend a Class 
    and are declaring a Function with the exact same name*/

class Human {
    final function Greet($Name){
        echo "Hello $Name";
    }
}


class Men extends Human {
     function Greet($Name){
        echo "Hello $Name";
    }
}

$Onur = new Men;

$Onur -> Greet("Onur");


/* 
This code will Show and Error in your IDE and
 Echo an Error Message like this :

Fatal error: Cannot override final method 
Human::Greet() in C:\xampp\htdocs\PHP\finalFunction.php 
on line 12
*/

/* 
But without final before function Greet it would normally 
Echo Hello + Some name passed as Parameters 
*/
