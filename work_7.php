<?php
function lowercase($arg1) {
    for ($i = 0; $i < strlen($arg1); $i++) {
        if (ord($arg1[$i]) >= ord('A') &&
            ord($arg1[$i]) <= ord('Z')) {
            return false;
        }
    }
    return true;
}
if(lowercase("Darova") == true)
    echo "Все буквы в нижнем регистре";
else
    echo "Какая-то буква(ы) в верхнем регистре";