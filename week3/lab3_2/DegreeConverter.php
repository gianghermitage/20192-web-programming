<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Radian Degree Converter</title>
    </head>
    <body>
        <?php
        if (isset($_POST["mode"])) {
            $mode = $_POST['mode'];
        } else {
            $mode = 0;
        }
        if (isset($_POST["value"])) {
            $value = $_POST['value'];
        } else {
            $value = 0;
        }
        
        function degreeToRadian($val) {
            return $val / 3.14;
        }

        function radianToDegree($val) {
            return $val * 3.14;
        }
        
        if (is_numeric($value)) {
            if ($mode == 0) {
                $result = radianToDegree($value);
            } else {
                $result = degreeToRadian($value);
            }
        } else {
            $result = '';
        }
        ?>
        <h1>Radian Degree Converter</h1>
        <form action="DegreeConverter.php" method="post">
            <table>
                <tr>
                    <td>Convert mode:</td>
                    <td>
                        <input type="radio" name="mode" value="0"> Radian to Degree
                        <input type="radio" name="mode" value="1"> Degree to Radian
                    </td>
                </tr>
                <tr>
                    <td>Enter value:</td>
                    <td>
                        <input type="text" name="value" value="<?php echo $value ?>">
                    </td>
                </tr>
                <tr>
                    <td>Result:</td>
                    <td><?php echo $result ?></td>
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
    </body>
</html>