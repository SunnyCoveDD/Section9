<?php
function Task3($arg1)
{
    $factorial = 1;
    for ($i = 1; $i <= $arg1; $i++) {
        $factorial *= $i;
    }
    echo "Факториал числа " . $arg1 . " = " . $factorial;
}
Task3(5);