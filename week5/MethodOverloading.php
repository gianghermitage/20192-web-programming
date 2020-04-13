<?php

class MethodTest{
    public function __call($name, $arguments) {
        echo"calling object method '$name'".implode(',',$arguments)."<br>";
    }
    public static function __callStatic($name,$arguments) {
        echo"calling static method '$name'".implode(',',$arguments)."<br>";
    }
}
$obj = new MethodTest;
$obj->runTest(' in obj context');
MethodTest::runTest(' in static context');