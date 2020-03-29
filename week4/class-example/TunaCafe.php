<html>
    <head>
        <title>Tuna Cafe</title>
    </head>
    <body>
        <font size ="4" color="blue">
        Welcome to the Tuna Cafe survey!</font>
        <form action="TunaResult.php" method="GET">
            <?php
            $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
            $bestseller = 2;
            print("Please indicate all your favotie dishes.<br>");
            for ($i = 1; $i < count($menu); $i++) {
                print "<input type=\"checkbox\" name=\"prefer[]\" value=$i>$menu[$i]";
                if ($i == $bestseller) {
                    print "<font color=red> Our best seller!!!</font>";
                }
                print"<br>";
            }
            ?>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </body>
</html>
