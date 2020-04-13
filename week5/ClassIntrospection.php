<?php
  function display_classes() {
    $classes = get_declared_classes();
    foreach ($classes as $class) {
      echo "Showing information about $class<br>";

      echo "$class methods:<br>";
      $methods = get_class_methods($class);
      if (!count($methods)) {
        echo '<i>None</i><br>';
      } else {
        foreach ($methods as $method) {
          echo "<b>$method</b><br>";
        }
      }

      echo "$class properties:<br>";
      $properties = get_class_vars($class);
      if (!count($properties)) {
        echo '<i>None</i><br>';
      } else {
        foreach ($properties as $property => $value) {
          echo "<b>$property</b><br>";
        }
      }
    }
  }

  display_classes();
?>