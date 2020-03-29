<!DOCTYPE html>
<html>
  <head>
    <title>Guess a number</title>
  </head>
  <body>
    <h1>Guess a number</h1>
    <?php
      if (isset($_POST["result"])) {
        $result = $_POST['result'];
      } else {
        srand ((double) microtime() * 10000000);
        $result = rand(0, 100);
      }
      if (isset($_POST["guess"])) {
        $guess = $_POST['guess'];
      } else {
        $guess = '';
      }
      if (isset($_POST["count"])) {
        $count = $_POST['count'] + 1;
      } else {
        $count = 0;
      }
    ?>
    <form action="GuessANumber.php" method="post">
      <table>
        <tr>
          <td>Your guess:</td>
          <td>
            <input type="text" name="guess" value="<?php echo $guess; ?>">
          </td>
        </tr>
          <tr>
            <td>
              <?php
                if (is_numeric($guess)) {
                  if ($guess == $result) {
                    echo "You are correct!";
                  } elseif ($guess < $result) {
                    echo "Higher plz";
                  } else {
                    echo "Lower plz";
                  }
                } else {
                  echo "You must enter a number!";
                }
              ?>
            </td>
          </tr>
        <tr>
          <td>You have guessed:</td>
          <td>
            <?php echo $count, " times" ?>
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
      <input type="text" name="result" value="<?php echo $result ?>" style="display: none;">
      <input type="text" name="count" value="<?php echo $count ?>" style="display: none;">
    </form>
  </body>
</html>