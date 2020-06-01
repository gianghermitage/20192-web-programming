<html>
    <head>
        <title>Happy Harry's Hardware Catalog</title>
    </head>
    <body>
        <?php
        $name = $_COOKIE["name"];
        $preference = $_COOKIE["preference"];
        print '<font color="blue" size=4>';
        if (isset($name)) {

            print "Welcome back to our humble hardware site, $name.";
        } else {
            print '<font color="red">';

            print 'Welcome to our humble hardware site.</font>';
        }
        if ($preference == 'hand tools') {
            print '<br> We have hammers on sale for 5 dollars!';
        } elseif ($preference == 'power tools') {
            print '<br> We have power drills on sale for 25 dollars!';
        } elseif ($preference == 'air fresheners') {
            print '<br> We now carry extra-strength air fresheners!';
        } else {
            print '<br> <font color="red">';
            print 'We have drills and hammers on special today!';
        }
        ?>
        </font>
    </body>
</html>