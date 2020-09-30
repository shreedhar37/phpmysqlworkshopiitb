<?php

$str = readline("Enter a string: ");

switch($str) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
         echo "$str";
         break;
        default:
         echo "it's a consonant";
        }
?>