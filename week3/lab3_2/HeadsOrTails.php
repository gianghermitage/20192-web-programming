<html>
    <head>
        <title> Coin flip!</title>
    </head>
    <body>
        <font size="4" color="blue">Please pick head or tail! </font>
        <form action="GotFlip.php" method="post">
            <?php
            print("<input type=\"radio\" name=\"pick\" value=0> Head");
            print("<input type=\"radio\" name=\"pick\" value=1> Tail");
            print("<br>");
            ?>
            <input type="submit" value="submit">
            <input type="reset" value="restart">
        </form>
    </body>
</html>