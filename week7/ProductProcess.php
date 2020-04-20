<html>
    <head>
        <title>
            Product Information Results
        </title>
    </head>
    <body>
        <?php
        $description = $_POST["description"];
        $code = $_POST["code"];
        $product = array('AB01'=>'25-pound Sledgehammer',
            'AB02'=>'Extra Strong Nails',
            'AB03'=>'Super Adjustable Wrench',
            'AB04'=>'3-Speed Electric Screwdiver');
        if(preg_match('/boat|plane/', $description)){
            print("Sorry, we do not sell boat or plane anymore");
        }
        elseif(preg_match('/^AB/',$code)){
            if(isset($product["$code"])){
                print"Code $code description: $product[$code]";
            }
            else{
                print("Sorry, product code not found");
            }
        }
        else{
            print("Sorry, all our product codes start with \"AB\"");
        }
        ?>
    </body>
</html>

