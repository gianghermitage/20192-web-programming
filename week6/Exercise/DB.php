  
<?php

class DB {

    public function connect($dsn) {
        print "$dsn";
        return false;
    }

    public function isError($conn) {
        return $conn;
    }

}

?>