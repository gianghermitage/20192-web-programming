<?php
$prefers = $_POST["prefers"];
$expire = $_POST["expire"];
$custname = $_POST["custname"];
$expire = time() + (60 * 60 * 24 * 30);
setcookie("name", $custname, $expire);
setcookie("preference", $prefers, $expire);
?>
<html>
    <head>
        <title>Happy Harry's Hardware Catalog </title>
    </head>
    <body>
        <font size=4 color="blue">
        <?php
        print "Thanks $custname! ";
        print "Let’s now look at $prefers... ";
        ?> 
        </font>
    </body>
</html>