<?php
    $colors = array('black' => '#000000',
        'white' => '#ffffff',
        'red' => '#ff0000',
        'blue' => '#0000ff',);
    
    $bg_name = $_POST['background'];
    $fg_name = $_POST['foreground'];
    
    setcookie('bg',$colors[$bg_name]);
    setcookie('fg',$colors[$fg_name]);
    ?>
<html>
    <head>
        <title>Preferences set</title>
    </head>
    <body>
        Thank you. Your preferences have been changed to:<br/>
        Foreground: <?= $fg_name?><br/>
        Background: <?= $bg_name?><br/>
        Click <a href="prefs-demo.php">here</a> to see the preferences in action
    </body>
</html>
    
    

