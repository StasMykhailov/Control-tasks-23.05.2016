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
    echo '����������, ������� �������� ������� ����� ������.';
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
    echo "��������� ������ ������:".$summ."���.";
}
else
{
    $flagDrink = $_POST['drink'];
    $flagPizza = $_POST['pizza'];
    $flagPromo = $_POST['promocode'];
    echo '����������, ������� ��������� �������� � �������� ���� � ����������!';
}
}
else
{
    echo '����������, �������� ��� �����! ��� ����, ����� ���������, �����������!';
}
?>

<form method='POST'>
    <label>
        �������� �����: <select name="pizza">
            <option <?php if ($flagPizza == '40') { echo "selected ";} ?>value="40">C ��������</option>
            <option <?php if ($flagPizza == '45') { echo "selected ";} ?>value="45">� ���������</option>
            <option <?php if ($flagPizza == '50') { echo "selected ";} ?>value="50">� ������</option>
            <option <?php if ($flagPizza == '42') { echo "selected ";} ?>value="42">� �������</option>
            <option <?php if ($flagPizza == '35') { echo "selected ";} ?>value="35">���������</option>
        </select>
    </label>
    <label>
        �������� �������: <select name="drink">
            <option <?php if ($flagDrink == '0') { echo "selected ";} ?>value="0">��� �������</option>
            <option <?php if ($flagDrink == '13') { echo "selected ";} ?>value="13">Coca-cola</option>
            <option <?php if ($flagDrink == '14') { echo "selected ";} ?>value="14">Fanta</option>
            <option <?php if ($flagDrink == '15') { echo "selected ";} ?>value="15">Sprite</option>
        </select>
    </label>
    <label>
        ��������: <input type='checkbox' <?php if ($flagPromo == "0.1") { echo "checked ";} ?>value="0.1" name='promocode'>
    </label>
    <label>
        ������� ��������� �������� �����:<input type='text' name='distance'>
    </label>
    <input type='submit'>
</form>
