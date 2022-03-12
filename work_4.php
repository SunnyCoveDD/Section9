<?php
function Task4($arg1)
{
    for($i = 2; $i < $arg1; $i++)
    {
        if($arg1 % $i == 0)
        {
            return 0;
        }
    }
    return 1;
}
$num = Task4(5);
if($num == false)
{
    echo "Число не простое";
}
else
{
    echo "Число простое";
}
