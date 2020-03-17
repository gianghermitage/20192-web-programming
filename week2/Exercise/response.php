<html>
    <head>
        <title> Receiving Input </title>
    </head>
    <body>
        <?php
        $name = $_POST["name"];
        $sid = $_POST["sid"];
        $class = $_POST["class"];
        $uni = $_POST["uni"];

        print("<br>Hello, $name, $sid");
        print("<br>You are currently studying at class $class, $uni");
        print("<br><br>Your hobbies are:");
        if (!empty($_POST['hobby'])) {
            foreach ($_POST['hobby'] as $selected) {
                echo "<br>" . $selected ;
            }
        }
        ?>
    </body>
</html>