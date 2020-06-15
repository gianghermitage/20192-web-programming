<?php
//get the q parameter from URL
$q=$_GET["q"];


// Set output to "no suggestion" if no hint was found
// or to the correct values
$hint = "";
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>