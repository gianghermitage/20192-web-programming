<html>
    <head>
        <title>Order Product 3</title>
    </head>
    <body>
        <?php
        $sample_hidden = $_POST["sample_hidden"];
        $quantity = $_POST["$quantity"];
        $product = $_POST["product"];
        $name = $_POST["name"];
        $email = 'orders@hardwareville.com';
        $body = "New Order: Product=$product Number=$quantity Cust=$name Code=$code";
        print '<font size=4>';
        print "<br>Sending e-mail to order handling department at $email ... </font>";
        print "<br>The e-mail body is <i>: $body. </i>";
        $from = 'harry@hardwareville.com';
        $subject = "New order from $name";
        mail($email, $subject, $body, "From: $from");
        print '<br><font color="blue"> E-mail sent. Thanks for ordering. </font>';
        print "<br>By the way, sample hidden=$sample_hidden";
        ?>
    </body>
</html>