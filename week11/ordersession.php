<?php session_start(); ?>
<html>
    <head>
        <title>Order Product</title>
    </head>
    <body>
        <form action=“sessions2order.php“ method="post">
            <font color=blue size=5> Hardware Product Order Form </font>
            <br> We have hammers, handsaws, and wrenches.
            <br>Enter Item: <input text type="text" size="15"
                                   maxlength="20" name="product">
            Enter Quantity: <input text type="text" size="15"
                                   maxlength="20" name="quantity"><br>
                                   <?php
                                   $sample_hidden = 'Welcome Again!';

                                   session_register('sample_hidden');
                                   ?>
            <br><input type="submit" value="Click To Submit">
            <input type = "reset" value = "Reset" >
        </form>
    </body>
</html>