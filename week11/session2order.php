<?php session_start() ?>
<html><head><title> Order Product 2 </title> </head>
    <body>
        <form action=“sessions3order.php" method="post">
            <?php
            $sample_hidden = $_SESSION['sample_hidden'];
            print "<h1> Sample hidden= $sample_hidden</h1>";
            print "<br>You selected product=$product and
quantity=$quantity";
            session_register('product');
            session_register('quantity');
            print '<br>Please enter your name';
            print '<input text type="text" size="15" maxlength="20"
name="name">';
            print ' and Billing Code: (5 digits)';
            print '<input text type="text" size="5" maxlength="5"
name="code">';
            print '<br> <input type=submit value="Process Order">';
            print '<input type=reset>';
            print '</form></body></html>';
            ?>