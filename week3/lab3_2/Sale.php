<!DOCTYPE html>

<html>
    <head><title>Our shop</title></head>
    <body>
        <font size =4 color ="blue">
        <?php
            $today = date('l, F d, Y');
            print "Welcome on $today to our huge blowout sale! </font>";
            $month = date('m');
            $year = date ('Y');
            $day = date('d');
                $dayofyear = date ('z');
                if ($month == 3 & $year == 2020) {
                    $daysleft = (30 - $day + 10);
                    print "<br> There are $daysleft sales days left";
                } elseif ($month == 4 & $year == 2020) {
                    if ($dayofyear <= 10) {
                        $daysleft = (10 - $dayofyear);
                        print "<br> There are $daysleft sales days left";
                    } else {
                        print "<br> Sorry, our sale is over.";
                    }
                } else {
                    print "<br> Sorry, our sale is over.";
                }
                print "<br> Our Sale Ends April 10,2020";
        ?>
        </font>
    </body>
</html>