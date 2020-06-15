<?php
  $input = "\"Stop pulling my hair!\" Jane's eyes flashed.<p>";
  $double = htmlentities($input);
  //&quot;Stop pulling my hair!&quot; Jane's eyes flashed.&lt;p&gt;
  $both = htmlentities($input, ENT_QUOTES);
  //&quot;Stop pulling my hair!&quot; Jane&#039;s eyes flashed.&lt;p&gt;
  $neither = htmlentities($input, ENT_NOQUOTES);
  // "Stop pulling my hair!" Jane's eyes flashed.&lt;p&gt;
?>