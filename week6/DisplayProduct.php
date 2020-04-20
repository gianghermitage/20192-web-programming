<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Product Display</title>
    </head>
    <body>
        <?php
        $server = '127.0.0.1';

        $user = 'giang';

        $pass = 'abcdef090';

        $mydb = 'test';

        $table_name = 'Products';
        $connect = mysqli_connect($server, $user, $pass);
        print '<font size="5" color="blue">';
        print "$table_name Data</font><br>";
        $query = "SELECT * FROM $table_name";
        print "The query is <i>$query </i><br>";
        mysqli_select_db($connect, $mydb);
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            print '<table border=1>';
            print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
        } else {
            die("Query=$query failed!");
        }
        mysqli_close($connect);
        ?>
    </body>
</html>