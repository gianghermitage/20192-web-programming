<html>
    <head>
        <title>Front door</title>
    </head>
    <?php
        $bg = $_COOKIE['bg'];
        $fg = $_COOKIE['fg'];
        ?>
    <body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
        <h1>Welcome to the store</h1>
        We have may fine products for you to view. Please feel free to browse 
        the aisles and stop an assistant at any time. But remember, you break it 
        you bought it<p>
        Would you like to <a href="PrefSelection.html">change yout preferences?</a>
    </body>

</html>
