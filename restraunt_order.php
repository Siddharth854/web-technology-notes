<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="restraunt_order.php" method="post">
        <label>quantity:</label><br/>
        <input type="text" name="quantity"/><br/>
        <input type="submit" value="total"/>
    </form>
</body
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = NULL;
    echo"You have ordered {$quantity}  X  {$item} <br/>";
    echo"Your Total is: {$total}";
?>