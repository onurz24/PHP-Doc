<?php
/* Private Function means you can only 
call it inside the same Class with $this Keyword.
If you extend Class Dalmatiner with Class "Hund" and try to call the Private Class, 
it will return a Error Message. 

All Functions/Methods inside a Class are Public by Default
and accessible in all Instances of the Parent Class.
So there is no need to declare public, maybe for readability reasons
*/
class Hund {
    private function Age($alter){
        echo $alter;
    }
    public function HowOld($alter){
        $this -> Age($alter);
        /* 
            Public Function HowOld inside 
            of Class Hund will call the Privat function 
            and pass the Parameters so even the Instance 
            outside of Class Hund can use the Private Function
        */
    }
}
class Dalmatiner extends Hund {}
$Rocky = new Hund();
$Rocky -> HowOld(10 . " Years old");