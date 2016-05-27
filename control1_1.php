<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 28.05.2016
 * Time: 0:18
 */
// task 8
function strSeparate($x, $y) {
    $crossArray = str_split($y);
    $x = str_replace($crossArray, " ", $x);
    $crossWords = explode(' ', $x);

    foreach ($crossWords as $value) {
        echo $value."<br>";
    }

}

// task 9
?>
<form method = 'POST'>
    <input type = 'text' name = 'cities'>
    <input type = 'submit' value = 'Add'>
</form>
<?php

if (!empty($_POST['cities']) && isset($_POST['cities'])) {
    $crossArr = explode(' ', $_POST['cities']);
    sort($crossArr);
    $newString = implode(' ', $crossArr);
    echo $newString;
} else {
    echo 'Пожалуйста, введите названия городов через пробел.';
}
?>


<?php
// task 10
?>

<?php
if(
    isset($_POST['pizza']) &&
    isset($_POST['drink']) &&
    isset($_POST['distance']) &&
    !empty($_POST['distance'])
) { if (is_numeric($_POST['distance'])) {
    $summ = $_POST['pizza'] + $_POST['drink'] + $_POST['distance'] * 3 + ($_POST['pizza'] +
            $_POST['drink']) * $_POST['promocode'];
    echo "Стоимость Вашего заказа:".$summ."грн.";
}
else
{
    $flagDrink = $_POST['drink'];
    $flagPizza = $_POST['pizza'];
    $flagPromo = $_POST['promocode'];
    echo 'Пожалуйста, введите дальность доставки в числовом виде в километрах!';
}
}
else
{
    echo 'Пожалуйста, сделайте Ваш выбор! Все поля, кроме промокода, обязательны!';
}
?>

<form method='POST'>
    <label>
        Выберите пиццу: <select name="pizza">
            <option <?php if ($flagPizza == '40') { echo "selected ";} ?>value="40">C ветчиной</option>
            <option <?php if ($flagPizza == '45') { echo "selected ";} ?>value="45">С говядиной</option>
            <option <?php if ($flagPizza == '50') { echo "selected ";} ?>value="50">С салями</option>
            <option <?php if ($flagPizza == '42') { echo "selected ";} ?>value="42">С грибами</option>
            <option <?php if ($flagPizza == '35') { echo "selected ";} ?>value="35">Веганская</option>
        </select>
    </label>
    <label>
        Выберите напиток: <select name="drink">
            <option <?php if ($flagDrink == '0') { echo "selected ";} ?>value="0">Без напитка</option>
            <option <?php if ($flagDrink == '13') { echo "selected ";} ?>value="13">Coca-cola</option>
            <option <?php if ($flagDrink == '14') { echo "selected ";} ?>value="14">Fanta</option>
            <option <?php if ($flagDrink == '15') { echo "selected ";} ?>value="15">Sprite</option>
        </select>
    </label>
    <label>
        Промокод: <input type='checkbox' <?php if ($flagPromo == "0.1") { echo "checked ";} ?>value="0.1" name='promocode'>
    </label>
    <label>
        Введите дальность доставки пиццы:<input type='text' name='distance'>
    </label>
    <input type='submit'>
</form>
