<?php

if (strpos($_SERVER['REQUEST_URI'], 'includes') !== false) {
  spl_autoload_register('my_autoloader_includes');
} else {
  spl_autoload_register('my_autoloader_classes');
}

function my_autoloader_includes($classname) {
  include '../classes/' . $classname . '.php';
}

function my_autoloader_classes($classname) {
  include 'classes/' . $classname . '.php';
}

?>