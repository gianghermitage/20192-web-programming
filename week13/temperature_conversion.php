<html>

<head>
    <title>Temperature Conversion</title>
</head>

<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Fahrenheit temperature: <input type="text" name="fahrenheit" />
        <br />
        <input type="submit" name="Convert to Celsius!" />
    </form>
    <?php
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fahr = $_POST['fahrenheit'];
    $celsius = ($fahr - 32) * 5 / 9;
    printf("%.2f F is %.2f C", $fahr, $celsius);
} else {
    die("This script only works with GET and POST requests.");
}?>
</body>

</html>