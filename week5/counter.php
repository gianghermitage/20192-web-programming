<?php

class Counter{
    private static $count = 0;
    const VERSION  = 2.0;
    
    function __construct() {
        self::$count++;
    }
    function __destruct() {
        self::$count--;
    }
    static function getCount() {
        return self::$count;
    }
}

$c1 = new Counter();
print($c1->getCount()."<br>\n");
$c2 = new Counter();
print($c2->getCount()."<br>\n");

$c2 = NULL;

print($c1->getCount()."<br>\n");
print("Version used:" . Counter::VERSION . "<br>\n");

