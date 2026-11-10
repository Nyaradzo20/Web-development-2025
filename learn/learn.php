<?php
# phpinfo(); //function to show all info about installed php

//Basic Syntax
/* content outside the php tags is ignored
closing tags can be omitted if a file is exclusively php to avoid white space


*/

 echo "hello\n";
 print_r("Hello World\n");
 // short tags are not recommended btw<?= 'print this string' also works without other statements.

 echo "a"; echo "b"; echo "c";
#The output will be "abc" with no errors

/* -------------------------
       VARIABLE
       ----------------*/
 $age = 34 ;
 echo $age;



 /*
 ----------------------
 Types
 ------------------------
 
$boool =True;
int , float, string, array, object, resource(holds a ref to an external resource eg images)
never(shows function does not terminate) 

*/



/* 
-------------
Concatenating
------------
.  or .=
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
var_dump($b);

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"
var_dump($a);


curly brackets can also be used with double quotes
this is faster btw
 echo "qwe{$a}rty"; // qwe12345rty, using braces
 echo "qwe" . $a . "rty"; // qwe12345rty, concatenation used
Be careful so that you don't type "." instead of ";" at the end of a line.

 ?><?
echo 'a'.
$c = 'x';
echo 'b';
echo 'c';

---------
PRINTING THE VARS
----------------------------

var_dump($age)
?>

The output is "axbc", because of the dot on the first line.


isset() is used to cjeck if variable is defined.
str_word_count( counts words);
str_replace(wordtobereplaced, replacer)

----------------------------
ARRAYS
-------------------------
It allows mixed type arrays

$User =[15, "apple" , True];

Associative arrays
$User = [ 'name' => "Zura",
            'age' => 23,
            'hobbies' => ['coding', 'tenis']
        ]

----------------
FUNCTIONS