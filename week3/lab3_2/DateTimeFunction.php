<!DOCTYPE html>
<html>
    <head>
        <title>Date time</title>
    </head>
    <body>
        <?php
        if (isset($_POST["name1"])) {
            $name1 = $_POST["name1"];
        } else {
            $name1 = '';
        }
        if (isset($_POST["dob1"])) {
            $dob1 = $_POST["dob1"];
            $date1 = date_create($dob1);
        } else {
            $dob1 = '';
        }
        if (isset($_POST["name2"])) {
            $name2 = $_POST["name2"];
        } else {
            $name2 = '';
        }
        if (isset($_POST["dob2"])) {
            $dob2 = $_POST["dob2"];
            $date2 = date_create($dob2);
        } else {
            $dob2 = '';
        }

        function days_diff($dob1, $dob2) {
            $diff = date_diff($dob1, $dob2);
            return $diff->format("%a days");
        }

        function years_diff($dob1, $dob2) {
            $diff = date_diff($dob1, $dob2);
            return $diff->format("%y years");
        }

        function display_info($name, $dob) {
            $date_string = date_format($dob, "l, F j, Y");
            $age = date_diff(date_create(), $dob)->format('%y');
            echo "<br>$name: $date_string - $age years old";
        }
        ?>
        <form action="DateTimeFunction.php" method="post">
            <table>
                <tr>
                    <td>Person1:</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name1" value="<?php echo $name1; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Date of birth:</td>
                    <td>
                        <input type="text" name="dob1" value="<?php echo $dob1; ?>">
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Person2:</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name2" value="<?php echo $name2; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Date of birth:</td>
                    <td>
                        <input type="text" name="dob2" value="<?php echo $dob2; ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" value="Submit">
                    </td>
                    <td align="left">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <?php
        if ($name1 && $date1 && $name2 && $date2) {
            display_info($name1, $date1);
            display_info($name2, $date2);
            $day_diff = abs(days_diff($date1, $date2));
            $year_diff = abs(years_diff($date1, $date2));
            echo "<br>days diffrent: $day_diff";
            echo "<br>years diffrent: $year_diff";
        } else {
            echo "Please fill in the form";
        }
        ?>
    </body>
</html>