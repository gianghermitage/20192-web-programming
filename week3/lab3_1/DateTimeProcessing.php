<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Date time processing</title>
    </head>
    <body>
        <?php
        if (isset($_GET["name"])) {
            $name = $_GET["name"];
        } else {
            $name = '';
        }
        if (isset($_GET["day"])) {
            $day = $_GET["day"];
        } else {
            $day = 0;
        }
        if (isset($_GET["month"])) {
            $month = $_GET["month"];
        } else {
            $month = 0;
        }
        if (isset($_GET["year"])) {
            $year = $_GET["year"];
        } else {
            $year = 0;
        }
        if (isset($_GET["hour"])) {
            $hour = $_GET["hour"];
        } else {
            $hour = 0;
        }
        if (isset($_GET["min"])) {
            $min = $_GET["min"];
        } else {
            $min = 0;
        }
        if (isset($_GET["sec"])) {
            $sec = $_GET["sec"];
        } else {
            $sec = 0;
        }
        

        function print_option($i, $selected) {
            if ($i == $selected) {
                echo "<option value=\"$i\" selected>$i</option>";
            } else {
                echo "<option value=\"$i\">$i</option>";
            }
        }

        function get_number_of_day($month, $year) {
            if ($month == 0 || $year == 0) {
                return 0;
            }
            $is_leap = 0;
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        $is_leap = 1;
                    } else {
                        $is_leap = 0;
                    }
                } else {
                    $is_leap = 1;
                }
            }
            switch ($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    return 31;
                case 4:
                case 6:
                case 9:
                case 11:
                    return 30;
                case 2:
                    return 28 + $is_leap;
                default:
                    return 0;
            }
        }

        $number_of_day = get_number_of_day($month, $year);
        $date_string = sprintf('%s-%s-%s %s:%s:%s', $year, $month, $day, $hour, $min, $sec);
        $date = date_create($date_string);
        ?>

        <form id="form" action="DateTimeProcessing.php" method="get">
            <p>Enter your name and select date and time for the appointment</p>
            <table>
                <tr>
                    <td>Your name:</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $name ?>">
                    </td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>
                        <select name="day">
                            <?php
                            for ($i = 1; $i <= $number_of_day; $i++) {
                                print_option($i, $day);
                            }
                            ?>
                        </select>
                        <select name="month" onchange="submit()">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                print_option($i, $month);
                            }
                            ?>
                        </select>
                        <select name="year" onchange="submit()">
                            <?php
                            for ($i = 2020; $i <= 2030; $i++) {
                                print_option($i, $year);
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td>
                        <select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                print_option($i, $hour);
                            }
                            ?>
                        </select>
                        <select name="min">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                print_option($i, $min);
                            }
                            ?>
                        </select>
                        <select name="sec">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                print_option($i, $sec);
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" value="Submit" name="submitted">
                    </td>
                    <td align="left">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>

            <?php if (isset($_GET["submitted"])): ?>
                <br>
                <br>
                <div>
                    Hi <?php echo $name; ?> !
                    <br>
                    You have choose to have an appointment on <?php echo date_format($date, "H:i:s d/m/Y"); ?>
                    <br>
                    <br>
                    More information
                    <br>
                    <br>
                    In 12 hours, the time and date is <?php
                    $date_string = sprintf('%s-%s-%s %s:%s:%s', $year, $month, $day, ($hour + 12) % 24, $min, $sec);
                    $date = date_create($date_string);
                    echo date_format($date, "H:i:s d/m/Y");
                    ?>
                    <br>
                    <br>
                    This month has <?php echo $number_of_day; ?> days!
                </div>
            <?php endif; ?>
        </form>
    </body>
</html>