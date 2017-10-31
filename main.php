<?php

/*
 * Regex quick reference
 * [abc]     	A single character: a, b or c
 * [^abc]     	Any single character but a, b, or c
 * [a-z]     	Any single character in the range a-z
 * [a-zA-Z]     Any single character in the range a-z or A-Z
 * ^     	    Start of line
 * $     	    End of line
 * \A     	    Start of string
 * \z     	    End of string
 * .     	    Any single character
 * \s     	    Any whitespace character
 * \S     	    Any non-whitespace character
 * \d     	    Any digit
 * \D     	    Any non-digit
 * \w     	    Any word character (letter, number, underscore)
 * \W     	    Any non-word character
 * \b     	    Any word boundary character
 * (...)     	Capture everything enclosed
 * (a|b)     	a or b
 * a?     	    Zero or one of a
 * a*     	    Zero or more of a
 * a+     	    One or more of a
 * a{3}     	Exactly 3 of a
 * a{3,}     	3 or more of a
 * a{3,6}     	Between 3 and 6 of a
 *
 */


//Example:
//Führt eine Suche mit einem regulären Ausdruck durch
//Pattern für eine gültige Mail-Adresse
$pattern = "/^([a-zA-Z]|ö|ä|ü|Ö|Ä|Ü|\.|-|_)+@([a-zA-Z]|ö|ä|ü|Ö|Ä|Ü|-)+\.{1}[de|com|net]/";


$subjects   = array();
$subjects[] = "Poreski@gmx.de";
$subjects[] = "Poreski@t-online.de";
$subjects[] = "Kolja_Poreski@gmx.net";
$subjects[] = "Poreski@web.de";
$subjects[] = "Kolja-Pöreski@web.de";
$subjects []= "Poreski.@gmx.de";
$subjects []= "Hans.Meiser@t-online.de";


foreach($subjects as $key => $email){
    if(preg_match($pattern,$email)){
        print_r ("OK");
    }else{
        echo "NO\n";
    }
}
?>
