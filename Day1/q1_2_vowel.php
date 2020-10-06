<?php

$str = readline("Enter a string: ");

switch($str) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
         echo "$str is a vowel.";
         break;
        default:
         echo "it's a consonant";
        }
?>