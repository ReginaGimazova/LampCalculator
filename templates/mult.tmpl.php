<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="../scripts/mult.php" method="post">

    <input type="number" id="num1" name="num1">
    <input name="oper" value="*" style="width: 30px; text-align: center">
    <input type="number" id="num2" name="num2">
    <p>
        <input type="submit" name="submit" value="calculate">
    </p>
</form>

<h1>
    <?php echo $result?>
</h1>

</body>
</html>