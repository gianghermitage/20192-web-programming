<html>
    <head>
        <title>Distance and Time calculation</title>
    </head>
    <body>
        <?php
        $cities = array("Dallas" => 803, "Toronto" => 435,
            "Boston" => 848, "Nashville" => 406, "Las Vegas" => 1526,
            "San Francisco" => 1835, "Washington, DC" => 595, "Miami" => 1189, "Pittsburgh" => 409);
        $destination = $_GET['destination'];
        foreach ($destination as $dest) {
            if (isset($cities[$dest])) {
                $dist = $cities[$dest];
                $time = round(($dist / 60), 2);
                $walktime = round(($dist / 5), 2);
                print"The distance between Chicago and <I>$dest</I> is $dist miles";
                print"<br>Driving at 60 miles per hour it would take $time hours";
                print"<br>Walking at 5 miles per hour it would take $walktime hours<br>";
            } else {
                print"Sorry, do not have destination infomation for $dest";
            }
        }
        ?>
    </body>
</html>