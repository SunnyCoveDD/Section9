<?php
function Task4($arg1)
{
    for($i = 2; $i < $arg1; $i++)
    {
        if($arg1 % $i == 0)
        {
            return false;
        }
        else
            return true;
    }
}
$num = Task4(5);
if($num == false)
{
    echo "Число непростое";
}
else
{
    echo "Число простое";
}
