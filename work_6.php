<?php
/*$arr = [33,22,11,55,'wm-school'];
function massive($arg1)
{
    echo asort($arg1);
}
massive($arr);*/

function array_sort($arg1) {
    for($i=0;$i < count($arg1);$i++) {
        $min = $i;
        for($a=$i+1;$a < count($arg1);$a++) {
            if($arg1[$a] < $arg1[$min] ) {
                $temp = $arg1[$min];
                $arg1[$min] = $arg1[$a];
                $arg1[$a] = $temp;
            }
        }
    }
    return $arg1;
}
$arr = array(33,22,11,55,'wm-school');
print_r(array_sort($arr));
