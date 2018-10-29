<?php
require_once '../init.php';

$result = 0;
$num1 = 0;
$num2 = 0;
$operator = '';

if (isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
}

$result = calculator($num1, $num2, $operator);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Title</title>
</head>
<body>
<h2>Calculator</h2>
<form method="post" action="">
    <input type="number" id="num1" name="num1">
    <br>
    <select name="operator">
        <option value="-">-</option>
        <option value="+">+</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <br>
    <input type="number" id="num2" name="num2">
    <p>
        <input class="calculate-btn" type="submit" name="submit" value="calculate">
    </p>
</form>
<h3>
    <?php echo $result?>
</h3>
</body>
</html>