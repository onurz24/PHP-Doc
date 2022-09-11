<?php

$UnhashedPassword = "JavaScript is better than PHP";


/* 
    1. Inside password_hash function i pass my Unhashed Password and a Salt as Parameter.
    2. PASSWORD_DEFAULT will automatically create a Salt for me.
    3.Then save the result as Variable $HashedWithSalt and Display it with Echo.
*/
$HashedWithSalt = password_hash($UnhashedPassword,PASSWORD_DEFAULT);

/* It will now Display my Password 
   hashed with a Algorism and then it
   will append a Random Salt Hash that will alwys be something else
*/
   echo $HashedWithSalt;



/*
How do i Verify if the Salt is always Something else ? 
You call password_verify function 
and pass as first Parameter the Unhashed Password 
(the User Input in Real World Example)
and as second Parameter the $HashedWithSalt
(The Salt Hashed Password from SQL Database
 in a Real World Example)
*/
 
$verify = password_verify("JavaScript is better than PHP",$HashedWithSalt);
echo $verify;

/* If the password verification was sucessfull 
the variable $verify will be either a 1/true or 0/false 
thats why in a Real World Example 
we would do the Verification with a if statement like this
*/


/* The Condition : if ... true */
if(password_verify("JavaScript is better than PHP",$HashedWithSalt)){
    echo "<br/> logged in";
}else{
    echo "<br/> wrong password";
}



/* This is an Example for a failed password verification. */

if(password_verify("PHP is better than JavaScript",$HashedWithSalt)){
    echo "<br/> logged in";
}else{
    echo "<br/> wrong password";
}