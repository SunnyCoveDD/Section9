<?php
function ckBox(){
    $args=func_get_args();
    foreach ($args as $a){
        echo "<input type='checkbox' name='weather' value=" . $a . " />" .
            ucfirst($a) . "<br/>";
    }
}
if (!isset($_POST['submit'])){
    ?>
    <form method="post" action="">
        <p>Пожалуйста, введите вашу информацию:</p>
        Город: <input type = "text" name = "city" />
        Месяц: <input type = "text" name = "month" />
        Год: <input type = "text" name = "year" />
        <p> Выберите тип погоды из списка ниже</p>
        <?php
        ckBox('солнце', 'облака', 'дождь', 'град', 'мокрый снег', 'снег', 'ветер', 'холод', 'тепло');
        ?>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
}else{
    $inputLocal = array(
        $_POST['city'],
        $_POST['month'],
        $_POST['year']
    );
    echo "В городе $inputLocal[0] в месяце $inputLocal[1] $inputLocal[2] года, 
вы наблюдали следующую погоду:<br/> <ul>";
    $weather = $_POST['weather'];
    foreach($weather as $w){
        echo "<li>" . ucfirst($w) . "</li>\n";
    }
    echo "</ul>";
}