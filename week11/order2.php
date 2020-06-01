<html>
    <head>
        <title> Order Product 2 </title>
    </head>
    <body>
        <form action="order3.php" method="post">
            <?php
            $sample_hidden = $_POST["sample_hidden"];
            $product = $_POST["product"];
            $quantity = $_POST["quantity"];
            print '<p class="highlight">';
            print "Hidden value=$sample_hidden </p><br>";
            print "You selected product=$product and quantity=$quantity";
            print "<br><br><input type=\"hidden\" name=\"product\" value=\"$product\"> ";
            print "<input type=\"hidden\" name=\"quantity\“ value=\"$quantity\">";
            print "<input type=\"hidden\" name=\"sample_hidden\"value=\"$sample_hidden\">";
            print 'Please enter your name:';
            print '<input type="text" size="15" maxlength="20" name="name">';
            print ' and billing code: (5 digits)';
            print '<input type="text" size="5" maxlength="5" name="code">';
            print '<br> <input type=submit value="Process Order">';
            print '<input type=reset>';
            ?>
        </form>
    </body>
</html>