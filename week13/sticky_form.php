<html> Sticky form - Example

<head>
    <title>Temperature Conversion</title>
</head>

<body>
    <?php $fahr = $_GET['fahrenheit'];?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Fahrenheit temperature:
        <input type="text" name="fahrenheit" value="<?php echo $fahr ?>" />
        <br />
        <input type="submit" name="Convert to Celsius!" />
    </form>
    <?php
if (!is_null($fahr)) {
    $celsius = ($fahr - 32) * 5 / 9;
    printf("%.2fF is %.2fC", $fahr, $celsius);
}?>
</body>

</html>