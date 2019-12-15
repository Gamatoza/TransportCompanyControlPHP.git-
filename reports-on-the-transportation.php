<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Главная</title>
</head>

<body id="mainbody">
    <?php require "blocks/header.php" ?>
    <?php require "blocks/registration.php" ?>
    <?php
    $mysqli = new mysqli('localhost', 'root', 'qwerty', 'CompanyDataBase');
    $result = $mysqli->query("SELECT * FROM vReport");
    $some = $result->fetch_assoc();
    echo $some['Password'];
    echo "<table width='100%' class='table table-striped'>";
    echo "<tr><td>ID заказа</td><td>Заказ</td><td>Клиент</td><td>Дальнобойщик</td><td>Грузчик</td><td>Место отбытия</td><td>Место прибытия</td><td>Цена</td></tr>";
    while ($row = $result->fetch_assoc()) {
        $Order = $row['OrderID'];
        $OrderName = $row['OrderName'];
        $Client = $row['Client'];
        $FarRobber = $row['FarRobber'];
        $Loader = $row['Loader'];
        $Place = $row['PlaceName'];
        $To = $row['To'];
        $Price = $row['Price'];
        echo "<tr><td>$Order</td><td>$OrderName</td><td>$</td><td>$Client</td><td>$FarRober</td><td>$Loader</td><td>$Place</td><td>$To</td><td>$Price</td></tr>";
    }
    echo "</table>";
    ?>
    <?php require "blocks/footer.php" ?>
</body>

</html>