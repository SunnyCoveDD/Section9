<form action="" method="post">
    <input placeholder="Длина" name="length" type="text">
    <input placeholder="Ширина" name="width" type="text">
    <input name="btn" type="submit">
</form>
<?php
function Task1($arg1, $arg2)
{
    $area = $arg1*$arg2;
    echo "Прямоугольник длиной " . $arg1 . " и шириной " . $arg2 . " имеет площадь " . $area;
}
if(isset($_POST['btn']))
    Task1($_POST['length'],$_POST['width']);
