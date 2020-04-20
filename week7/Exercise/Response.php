<html>
    <head>
        <title>Info check</title>
    </head>
    <body>
        <?php
        $email = $_POST[email];
        $url = $_POST[url];
        $phone = $_POST[phone];
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            print "Got valid email = $email <br>";
        } else {
            print "Invalid email = $email";
        }
        
        if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
            print "Got valid url = $url <br>";
        } else {
            print "Invalid url = $url";
        }
        
        if (preg_match("/^[0-9]{10}+$/", $phone)) {
            print "Got valid phone = $phone <br>";
        } else {
            print "Invalid phone = $phone";
        }
        ?> 
    </body>
</html>
