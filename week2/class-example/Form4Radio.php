<html>
    <head>
        <title> Receiving Input </title>
    </head>
    <body>
        <font size=5>Thank you: Got your input.</font>
        <?php
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        print("<br>Your email address is $email");
        print("<br>Your contact preference is $contact");
        ?>
    </body>
</html>