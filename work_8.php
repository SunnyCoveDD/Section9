<?php
function pal($string) {
    if ($string == strrev($string))
        return "Палинард";
    else
        return "Не палинард";
}
echo pal('madam')."<br>";
echo pal('robob');