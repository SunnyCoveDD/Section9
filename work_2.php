<?php
$l = 10;
$w = 20;
function Task2($arg1, $arg2)
{
    return $arg1*$arg2;
}
$area = Task2($l, $w);
echo "Прямоугольник длиной " . $l . " и шириной " . $w . " имеет площадь " . $area;