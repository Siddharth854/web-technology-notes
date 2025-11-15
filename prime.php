<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" value="Check">
    </form>

    <?php
    function isPrime($n, $i = 2)
    {
        if ($n <= 2)
            return ($n == 2);
        if ($n % $i == 0)
            return false;
        if ($i * $i > $n)
            return true;
        return isPrime($n, $i + 1);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["num"]);
        if (isPrime($n))
            echo "<h3 style='color:green;'>Yes, $n is a prime number.</h3>";
        else
            echo "<h3 style='color:red;'>No, $n is not a prime number.</h3>";
    }
    ?>
</body>
</html>
