<?php

class CoolClass {
    function Output (){
        echo "Hello World";
    }
}

/* User can now use everything inside of Class CoolClass. 
   If something is already defined inside Class CoolClass
   and in Class User,
   Class User will overwrite it for itself */

class User extends CoolClass {
    function __construct($firstname,$lastname){
        $this -> firstname = $firstname;
        $this -> lastname = $lastname;
    }

}
/* Creating 2 new instances of Class User,
 setting the Propertys with a Constructor,
the Constructor has to be named "function __construct(){...}" */
$User1 = new User("Onur","Zengin");
$User2 = new User("john","doe");


/* Overwrite Property */
$User2 -> firstname = "Johnny";

/* Display them */
echo $User1->firstname; /* not overwritten */
echo $User2->firstname; /* overwritten */



/* Use Function from different Class that is Extended */
$User1 -> Output();