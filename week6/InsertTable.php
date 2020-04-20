<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Insert Results</title>
    </head>
    <body>
        <?php
        $Item = $_POST['Item'];
        $Cost = $_POST['Cost'];
        $Weight = $_POST['Weight'];
        $Quantity = $_POST['Quantity'];

        $server = '127.0.0.1';

        $user = 'giang';

        $pass = 'abcdef090';

        $mydb = 'test';

        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass);
        $query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";
        print "The Query is <i>$query</i><br>";
        mysqli_select_db($connect, $mydb);
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect, $query)) {
            print "Insert into $mydb was successful!</font>";
        } else {
            print "Insert into $mydb failed!</font>";
        }
        mysqli_close($connect);
        ?>
    </body>
</html>